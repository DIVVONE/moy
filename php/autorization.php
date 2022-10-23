<script type="text/javascript">
	function changeForm() {
			document.getElementById("h2").innerHTML = "Регистрация";
			var b = document.getElementById('btn'); 
			b.setAttribute("value", "Зарегистрироватсья");
			var c = document.getElementById('check');
			c.innerHTML = "Авторизация";
			c.setAttribute("onclick","formChange()");
			var form = document.getElementById('forma');
			form.setAttribute('action','../php/reg.php');
	}
	function formChange() {
			document.getElementById("h2").innerHTML = "Авторизация";
			var b = document.getElementById('btn'); 
			b.setAttribute("value", "Войти");
			var c = document.getElementById('check');
			c.innerHTML = "Зарегистрироватсья";
			c.setAttribute("onclick","changeForm()");
			var form = document.getElementById('forma');
			form.setAttribute('action','../php/log.php');
	}
</script>
<main class="main">
		<div class="main-container">
			<div class="form-bg">
				<h2 id="h2">Авторизация</h2>
			</div>
			<div class="form-content">
				<form method="POST" action="../php/log.php" id="forma">
					<div class="input-form">
						<div class="input">
							<label for="login">
								Логин
								<input type="text" name="login" placeholder="Введите логин">
							</label>
						</div>
						<div class="input">
							<label for="passwd">Пароль
								<input type="password" name="password" placeholder="Введите пароль">
							</label>
						</div>
					</div>
					<div class="links-form">
						<div class="links">
							<label for="remember" id="remember"><input type="checkbox" name="remember">Запомнить меня</label>
						</div>
						<div class="links">
							<a name="registration" onclick="changeForm()" id='check'>Зарегистрироватсья</a>
						</div>
					</div>
					<div class="btn-form">
						<div class="btn-container">
							<div class="btn">
								<input type="submit" name="auto" value="Войти" id="btn">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</main>