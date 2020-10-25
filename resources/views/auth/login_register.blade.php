<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Psychology</title>

	<!-- Scripts -->

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Styles -->
	<link href="css/app.css" rel="stylesheet">
	<link href="css/login_register.css" rel="stylesheet">
</head>

<body>
	<div id="app">
		<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
			<div class="container">
				<a class="py-4" href="{{ url('/') }}">
					<button class="navbar-brand" type="button">
						<span class="navbar-toggler-icon">Назад</span>
					</button>
				</a>
			</div>
		</nav>

		<main class="py-4">
			<div class="container" id="container">
				<div class="form-container sign-up-container">
					<form method="POST" action="{{ route('register') }}">
						@csrf
						<h1>Створи свій акаунт</h1>
						<span>для пізнання самого себе</span>
						<input type="text" placeholder="Прізвище" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus />
						<input type="text" placeholder="Ім'я" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" />
						<select id="type" name="role" placeholder="Стан" class="form-control" onclick="stateCheck()" required>
							<option>Стан</option>
							<option value="student">Студент</option>
							<option value="teacher">Викладач</option>
						</select>
						<select id="group" name="group" placeholder="Номер групи" class="form-control" required>
							<option>Номер групи</option>
							@forelse ($groups as $group)
							<option value="{{$group->group}}">{{$group->group}}</option>
							@empty
							<option value="1">1</option>
							<option value="2">2</option>
							@endforelse
						</select>
						<input id="age" type="integer" placeholder="Ваш вік" class="form-control" value="{{ old('age') }}" name="age">
						<input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />
						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
						<input type="password" placeholder="Пароль" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />

						<button type="submit">Зареєструвати</button>
					</form>
				</div>
				<div class="form-container sign-in-container">
					<form method="POST" action="{{ route('login') }}">
						@csrf
						<h1>Вхід</h1>
						<span>до свого профілю</span>
						<input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
						<input type="password" placeholder="Пароль" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
						@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
						<button type="submit">Увійти</button>
					</form>
				</div>
				<div class="overlay-container">
					<div class="overlay">
						<div class="overlay-panel overlay-left">
							<h1>Із поверненням!</h1>
							<p>Маєте вже профіль? Для збереження і перегляду своїх змін, використайте свої наданні дані для входу. </p>
							<button class="ghost" id="signIn">Увійти</button>
						</div>
						<div class="overlay-panel overlay-right">
							<h1>Вітаємо, друже!</h1>
							<p>Залиш свої данні і розпочни пізнання себе.</p>
							<button class="ghost" id="signUp">Зареєструватися</button>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
	<script src="js/login_register.js"></script>
</body>

</html>