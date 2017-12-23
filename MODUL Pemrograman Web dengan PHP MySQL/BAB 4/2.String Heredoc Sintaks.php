<?php
	$str = <<<EOD
	example of string
	spanning multiple lines
	using heredoc syantax.
EOD;

	/*more complex example, with variables. */
	class foo
	{
		var $foo;
		var $bar;

		function foo()
		{
			$this->foo = 'foo';
			$this->bar = array('bar1','bar2','bar3');
		}
	}

	$foo = new foo();
	$name = 'mobley';

	echo <<<EOT
		<u>$str</u><br>
		My name is  "<b>$name</b>". i am printing some <b> $foo->foo</b>.
		now, i am printing some <b>{$foo->bar[1]}</b>.
		this should print a capital 'A' : \x41
EOT;
?>
