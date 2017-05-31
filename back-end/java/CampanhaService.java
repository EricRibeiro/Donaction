package sql;

import java.sql.DriverManager;
import java.sql.PreparedStatement;

import org.simpleframework.http.Query;
import org.simpleframework.http.Request;

public class CampanhaService extends SQLConnection {
	
	CampanhaService(String hostName, String dbName, String user, String pwd) {
		super(hostName, dbName, user, pwd);
	}

	CampanhaService() {
		super();
	}
	
	public Boolean cadastrar(Request request) throws Exception {
		setConnection(DriverManager.getConnection(getUrl()));
		Boolean adicionado = true;
		String insertSql = "INSERT INTO CAMPANHA (DSCAMPANHA, DTINICIO, DTFIM, CIDADECAMPANHA, NMCAMPANHA, VLRINVESTIMENTO, QTDMINVOUCHER, IMGPATH) "
				+ "VALUES (?,?,?,?,?,?,?,?);";
		try (PreparedStatement prep = getConnection().prepareStatement(insertSql)) {
			Query query = request.getQuery();
			prep.setString(1, query.get("dsCampanha"));
			prep.setDate(2, java.sql.Date.valueOf(query.get("dtInicio")));
			prep.setDate(3, java.sql.Date.valueOf(query.get("dtFim")));
			prep.setString(4, query.get("cidadeCampanha"));
			prep.setString(5, query.get("nmCampanha"));
			prep.setDouble(6, query.getFloat("vlrInvestimento"));
			prep.setInt(7, query.getInteger("qtdMinVoucher"));
			prep.setString(8, query.get("imgPath"));
			int count = prep.executeUpdate();
			System.out.println("Inserida: " + count + " linha(s)");
		} catch (Exception e) {
			adicionado = false;
			e.printStackTrace();
		}
		return adicionado;
	}
}

