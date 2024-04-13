<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
	<link rel="stylesheet" href="../public/style/style.css">
	
	<link rel="stylesheet" href="../public/style/promo.css">
</head>
<body>
	
	<div class="promotions">
		<h2>promotions</h2>
		<span>Promos * Liste</span>
	</div>
	
	<div class="containe">

        <div class="dev">
            <div class="promo">
                <span>List Des Promotions <span class="un">(1)</span></span>
            </div>
            <div class="input">
                <input type="text" placeholder="Recherche ic ..." class="text">
                <i class="fa-solid fa-magnifying-glass"></i>
    
                <a href="promotion.php"> <button><i class="fa-solid fa-plus"></i>nouvel</button></a>
                
            </div>
        </div>
		
			
	</div>

    <table>
            <thead>
                <tr>
                    <th>Libelle</th>
                    <th>DateDebut</th>
                    <th>DateFin</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Promotion 6</td>
                    <td>2024-02-01</td>
                    <td>2024-11-01</td>
                    <td><input type="checkbox" class="check"></td>
                </tr>
            </tbody>
    </table>

	<div class="footer">
		<p>© Sonatel Academy.</p>
        <i class="fa-solid fa-gears"></i>


	</div>

</body>
</html>