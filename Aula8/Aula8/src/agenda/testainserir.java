package agenda;

import java.util.Calendar;

public class testainserir {

	public static void main(String[] args) {
		Contato contato = new Contato();
		contato.setNome("KAIO");
		contato.setEndereco("RUA 5");
		contato.setEmail("kakaka@kuru.com");
		contato.setDataNascimento(Calendar.getInstance());
		
		ContatoDAO dao = new ContatoDAO();
		dao.adcionar(contato);
		System.out.println("Gravando com sucesso!!");
	}

}
