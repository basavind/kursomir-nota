<p style="text-align: center;">
	<img style="width:50%;"
		 src="http://<?=Yii::app()->params["domain"]; ?>/i/logo.png" alt="XONR">
</p>
<p>
	Вы успешно прошли регистрацию на сайте <a href='http://<?=Yii::app()->params["domain"]; ?>/'><?=Yii::app()->name; ?></a>.<br>
	Добро пожаловать!
</p>
<p>
	На всякий случай, ваш логин — <strong><?=$user->login; ?></strong>.
</p>

<p style="color: #777; font-style: italic;">
	P. S. Это письмо написано искусственным интеллектом, отвечать на него ненадо.
</p>
