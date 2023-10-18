package com.aula10.br;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping ("aula")
public class exemploController {
	@GetMapping("/exemplo")
	public String retorna() {
		return "aula String Framework!";
	}
}
