package sql;
import java.sql.Statement;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import org.simpleframework.http.Query;
import org.simpleframework.http.Request;
import com.google.gson.Gson;

public class EmpresaService extends SQLMetodos<Empresa>{
	
	EmpresaService(String hostName, String dbName, String user, String pwd) {
		super(hostName, dbName, user, pwd);
	}
	
	@Override
	public Boolean insert(Request request) throws Exception {
		setConnection(DriverManager.getConnection(getUrl()));
		Query query = request.getQuery();
		Boolean adicionado = true;
		String insertSql = 
				"INSERT INTO EMPRESA (NMEMPRESA, NRCNPJ, EMAILEMPRESA, SENHAEMPRESA, CIDADEEMPRESA) "
				+ "VALUES (?,?,?,?,?);";
		try (PreparedStatement prep = getConnection().prepareStatement(insertSql)) {
            prep.setString(1, query.get("nmEmpresa"));
            prep.setInt(2, query.getInteger("nrCnpj"));
            prep.setString(3, query.get("emailEmpresa"));
            prep.setString(4, query.get("senhaEmpresa"));
            prep.setString(5, query.get("cidadeEmpresa"));
            int count = prep.executeUpdate();
            System.out.println("Inserida: " + count + " linha(s)");
		} catch (Exception e) {
			adicionado = false;
		}
		return adicionado;
	}

	@Override	
	public Boolean update(Request request) throws Exception {
		setConnection(DriverManager.getConnection(getUrl()));
		Query query = request.getQuery();
		Boolean atualizado = true;
		String updateSql = 
				"UPDATE EMPRESA "
				+ "SET NMEMPRESA = ?, NRCNPJ = ?, EMAILEMPRESA = ?, SENHAEMPRESA = ?, CIDADEEMPRESA = ?"
				+ "WHERE CDEMPRESA = ?";
		try (PreparedStatement prep = getConnection().prepareStatement(updateSql)) {
            prep.setString(1, query.get("nmEmpresa"));
            prep.setString(2, query.get("nrCnpj"));
            prep.setString(3, query.get("emailEmpresa"));
            prep.setString(4, query.get("senhaEmpresa"));
            prep.setString(5, query.get("cidadeEmpresa"));
            prep.setInt(6, request.getInteger("cdEmpresa"));
            int count = prep.executeUpdate();
            System.out.println("Editada: " + count + " linha(s)");
		} catch (Exception e) {
			atualizado = false;
		}
		return atualizado;
	}
	
	@Override
	public String select(Request request) throws Exception {
		setConnection(DriverManager.getConnection(getUrl()));
		Gson gson = new Gson();
		Query query = request.getQuery();
		String email = query.get("emailEmpresa");
		String senha = query.get("senhaEmpresa");
		Empresa dadosDoUsuario;
		String selectSql = 
				"SELECT * " 
                + "FROM EMPRESA "
				+ "WHERE EMAILEMPRESA = '" + email 
				+ "' AND SENHAEMPRESA = '" + senha + "'";
		try (Statement statement = getConnection().createStatement();
			ResultSet resultSet = statement.executeQuery(selectSql)) {
			dadosDoUsuario = createObject(resultSet);
        } catch (Exception e) {
        	dadosDoUsuario = null;
		}
		if (dadosDoUsuario != null)
			return gson.toJson(dadosDoUsuario, Empresa.class);
		return null;
	}
	
	@Override
	public Empresa createObject(ResultSet resultSet) throws Exception {
		resultSet.next();
		Integer id = new Integer(resultSet.getInt("CDEMPRESA"));
		Integer cnpj = new Integer(resultSet.getInt("NRCNPJ"));
		String nome = resultSet.getString("NMEMPRESA");
		String email = resultSet.getString("EMAILEMPRESA");
		String senha = resultSet.getString("SENHAEMPRESA");
		String cidade = resultSet.getString("CIDADEEMPRESA");
		return new Empresa(id, cnpj, nome, email, senha, cidade);
	}

}
