<HTML>
	<HEAD>
		<TITLE>Percabangan</TITLE>
	</HEAD>
	
	<BODY>
		<?php
			$jenisHero = 'killer';
			
			print "<h1> Contoh dari Hero $jenisHero adalah ";

			switch ($jenisHero)
			{
				case 'killer':
					echo "Mortred";
				break;
				case 'support';
					echo "EartShaker";
				break;
				case 'Tanker';
					echo "Axe";
				break;
				default:
					echo "Traxex";
				break;
			}
		?>
	</BODY>
</HTML>