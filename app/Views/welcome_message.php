<style type="text/css">
	body,
	ul {
		margin: 0px;
		padding: 0px;
	}

	a {
		color: black;
		text-decoration: none;
		font-family: sans-serif;
	}

	a:hover {
		background: rgba(0, 0, 0, 0.05);
	}

	#logo {
		font-size: 1.5rem;
		font-weight: bold;
	}

	#header {
		box-sizing: border-box;
		height: 70px;
		padding: 1rem;
		display: flex;
		align-items: center;
		justify-content: space-between;
		background: #e7e7e7;
	}

	#menu {
		display: flex;
		list-style: none;
		gap: 0.5rem;
	}

	#menu a {
		display: block;
		padding: 0.5rem;
	}

	#btn-mobile {
		display: none;
	}

	@media (max-width: 600px) {
		#menu {
			display: block;
			position: absolute;
			width: 100%;
			top: 70px;
			right: 0px;
			background: #e7e7e7;
			transition: 0.6s;
			z-index: 1000;
			height: 0px;
			visibility: hidden;
			overflow-y: hidden;
		}

		#nav.active #menu {
			height: calc(100vh - 70px);
			visibility: visible;
			overflow-y: auto;
		}

		#menu a {
			padding: 1rem 0;
			margin: 0 1rem;
			border-bottom: 2px solid rgba(0, 0, 0, 0.05);
		}

		#btn-mobile {
			display: flex;
			padding: 0.5rem 1rem;
			font-size: 1rem;
			border: none;
			background: none;
			cursor: pointer;
			gap: 0.5rem;
		}

		#hamburger {
			border-top: 2px solid;
			width: 20px;
		}

		#hamburger::after,
		#hamburger::before {
			content: '';
			display: block;
			width: 20px;
			height: 2px;
			background: currentColor;
			margin-top: 5px;
			transition: 0.3s;
			position: relative;
		}

		#nav.active #hamburger {
			border-top-color: transparent;
		}

		#nav.active #hamburger::before {
			transform: rotate(135deg);
		}

		#nav.active #hamburger::after {
			transform: rotate(-135deg);
			top: -7px;
		}
	}
</style>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Teste PHP</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<header id="header">
		<a id="logo" href="">Teste PHP</a>
		<nav id="nav">
			<button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">Menu
				<span id="hamburger"></span>
			</button>
			<ul id="menu" role="menu">
				<li><a href="/cadastroDeAlunos/public/aluno">Listar Alunos</a></li>
			</ul>
		</nav>
	</header>
<div align="center" >
	Para iniciar, clique no botão Listar alunos no canto superior direito
</div>
	
</body>

</html>