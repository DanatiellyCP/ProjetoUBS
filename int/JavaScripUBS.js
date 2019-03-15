
			function ValidarUBS(){

				var nomeUBS = formCadastro.nomeUBS.value;
				var codUBS = formCadastro.codUBS.value;
				var bairroUBS = formCadastro.bairroUBS.value;
				var ruaUBS = formCadastro.ruaUBS.value;
				var numeroUBS = formCadastro.numeroUBS.value;
				var telefoneUBS = formCadastro.telefoneUBS.value;
				var emailUBS = formCadastro.emailUBS.value;

				if (nomeUBS=="") {
					alert('Preencha o campo nome');
					formCadastro.nomeUBS.Focus();
					return false;
				}

				if (codUBS=="") {
					alert('Preencha o campo de Codigo');
					formCadastro.codUBS.Focus();
					return false;
				}

				if (bairroUBS=="") {
					alert('Preencha o campo Bairro');
					formCadastro.bairroUBS.Focus();
					return false;
				}

				if (ruaUBS=="") {
					alert('Preencha o campo Rua');
					formCadastro.ruaUBS.Focus();
					return false;
				}

				if (numeroUBS=="") {
					alert('Preencha o campo Número');
					formCadastro.numeroUBS.Focus();
					return false;
				}

				if (telefoneUBS=="") {
					alert('Preencha o campo Telefone');
					formCadastro.telefoneUBS.Focus();
					return false;
				}

				if (emailUBS=="") {
					alert('Preencha o campo E-mail');
					formCadastro.emailUBS.Focus();
					return false;
				}

				if (emailUBS.search("@")==-1) {
					alert('Endereço de E-mail iválido');
					return false;
				}

			}

		function ValidarMedico(){
			var nomeMedico = formMedico.nomeMedico.value;
			var cpfMedico = formMedico.cpfMedico.value;
			var dataMedico = formMedico.dataMedico.value;
			var telefoneMedico = formMedico.telefoneMedico.value;
			var celularMedico = formMedico.celularMedico.value;
			var emailMedico = formMedico.emailMedico.value;
			var rgMedico = formMedico.rgMedico.value;
			var bairroMedico = formMedico.bairroMedico.value;
			var ruaMedico = formMedico.ruaMedico.value;
			var numeroMedico = formMedico.numeroMedico.value;
			var crmMedico = formMedico.crmMedico.value;
			var especialidaMedico = formMedico.especialidaMedico.value;

			if (nomeMedico=="") {
					alert('Preencha o campo nome');
					formMedico.nomeMedico.Focus();
					return false;
				}
			if (emailMedico.search("@")==-1) {
				alert('Endereço de E-mail inválido');
				return false;
			}

		}