package com.aula10.br;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class webcontroller {
	@RequestMapping("/index")
	public String index() {
		return "index";
	}
	
	
	@RequestMapping("/mensagem")
	public String mensagem() {
		return "mensagem";
	}
	
	@RequestMapping("/mensagem2")
	public String mensagem2() {
		return "mensagem2";
	}
}
