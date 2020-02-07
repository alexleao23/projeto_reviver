<!DOCTYPE html>
<html>
	<head>
		<style>
			span {
				font-family: Arial;
				font-size: 14px;
			}

			table.solicitante-info {
				font-family: Arial;
				font-size: 14px;
				border: 1px solid rgb(60, 60, 60);
				border-radius: 5px;
				border-spacing: unset;
				overflow: hidden;
			}

			table.solicitante-info tr td {
				padding: 10px;
			}

			td.info-label {
				font-weight: 600;
			}

			/*tr:nth-child(odd) {
				background-color: #E6E6E6;
			}*/
		</style>
	</head>
	<body>
		<table class="solicitante-info">
			<tr bgcolor="#E6E6E6">
				<td class="info-label">Nome:</td>
				<td>{{ $nome_solicitante }}</td>
			</tr>
			<tr>
				<td class="info-label">E-mail:</td>
				<td>{{ $email_solicitante }}</td>
			</tr>
			<tr bgcolor="#E6E6E6">
				<td class="info-label">Celular:</td>
				<td>{{ $celular_solicitante }}</td>
			</tr>
			<tr>
				<td class="info-label">Doença:</td>
				<td>{{ $doenca_solicitante }}</td>
			</tr>
			<tr bgcolor="#E6E6E6">
				<td class="info-label">Sou:</td>
				<td>{{ $sou_solicitante }}</td>
			</tr>
		</table>

		<hr/>

		<span>
			*E-mail automático gerado na
			solicitação de cadastro no
			Projeto Reviver - Unifap
		</span>
	</body>
</html>