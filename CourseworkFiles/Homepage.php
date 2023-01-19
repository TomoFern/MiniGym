<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>MiniGym</title>
		<link rel="stylesheet" href="site.css?v=<?php echo time(); ?>">
	</head>

	<body class="background">
		<header>
				<nav>
					<div>
						<ul class="navbar">
							<li>
								<a href="Homepage.php">Home</a>
							</li>
							<li >
								<a href="ManageAccount.php">Manage Account</a>
							</li>
                            <li>
                                <?php echo"Welcome ", $_SESSION["name"]?>
                            </li>
						</ul>
					</div>
				</nav>
		</header>
    </body>
</html>