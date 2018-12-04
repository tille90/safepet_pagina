Hemos recibido una solicitud de reestablecimiento de contraseña,<br>
<br>

Por favor, Dirijase al siguiente link para la recuperación:<br> <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
