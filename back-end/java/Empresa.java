package sql;

public class Empresa extends Usuario {
	
	private Integer nrCnpj;

	public Empresa(Integer id, Integer cnpj, String nome, String email, String senha, String cidade) {
		super(id, nome, email, senha, cidade);
		setNrCnpj(cnpj);
	}

	public Integer getNrCnpj() {
		return nrCnpj;
	}

	public void setNrCnpj(Integer nrCnpj) {
		this.nrCnpj = nrCnpj;
	}
}
