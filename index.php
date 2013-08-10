<html>
	<head>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/css/bootstrap.min.css">
	</head>
    <body>
	<script src="http://codeorigin.jquery.com/jquery-2.0.3.min.js"></script>
        <div class="row">
            <div class="col-lg-4">COLUM LARGE 4</div>
            <div class="col-lg-4 col-lg-offset-4">COLUM OFFSET 4</div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-lg-offset-3">3 offset 3</div>
            <div class="col-lg-3 col-lg-offset-3">3 offset 3</div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">Colum lrg6 offset 3</div>
        </div>

        <div style="opacity:0.3;position:absolute;left:;width:100%;height:100%;background-color:#8AC007"></div>

        <h1 style="font-family:verdana;color:green;font-size:60px;">Rules are for those without reason.</h1>

        <p class="text-center"style="font-family:arial;color:red;font-size:40px;">
            Rules are constructed given different circumstances other than the current.
            <br> Reason is used to deal in real time.
        </p>

        <p style="font-family:comics sans;color:teal;font-size:50px;"> Yella smelly fella.
            <img src="http://www.littleamerica-twh.net/images/Buster's%20Yellow%20Fellow.jpg" width="300" height="350">
        

</p>

        <div style="color:#40B3DF;">
            Colors
            <span style="background-color:#B4009E;color:#ffffff;">Boxes</span>
        </div>

        <p>
            <a href="http://www.flexonline.com/"> These guys look constipadted.</a>
            This makes me feel the opposite of tingley.
        </p>

        <?php
            $users = array('Ross', 'Andre', 'Everybody');

            foreach ($users as $user) {
                echo "<h3>Poopy pants makes $user Dance</h3>";
            }
        ?>
	<p class="text-right"style="font-family:comics;color:red;font-size:90px;"> THIS IS GOOD PHO / BEEF STEW.
		<address class="text-right">
		<strong>Vhin Long.</strong><br>
		1061 Murfreesboro Pike<br>
		Nashville, TN 37215<br>
		</address>

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/css/bootstrap.min.css">
    
	<h4>Secrets of the Divine (no cheating)</h4>
	<table class="table"border="69">
	  <tr class="success">
	   <td>pizza</td>
	   <td>tacos</td>
	   <td>bacon band-aids</td>
	  </tr>
	  <tr class="danger">
	   <td>big</td>
	   <td>stupid</td>
	   <td>jerk</td>
	  </tr>
	 </table>

        <?php
            $eat = array('pizza', 'beans', 'big bites');
            $yell = array('dog', 'mom', 'small children');
            $poop = array('steps', 'car hood', 'enemys shoes');
        ?>

        <table>
            <thead>
                <tr>
                    <th>Things to eat.</th>
                    <th>Things to yell at.</th>
                    <th>Things to poop on.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($eat as $eat): ?>
                        <td><?php echo $eat; ?></td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <?php foreach ($yell as $yell): ?>
                        <td><?php echo $yell; ?></td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <?php foreach ($poop as $poop): ?>
                        <td><?php echo $poop; ?></td>
                    <?php endforeach; ?>
                </tr>
            </tbody>
        </table>

        <form class="form-inline">
            <fieldset disabled>
                <div class="form-group">
                    <label for="disabledInput">Disabled input</label>
                    <input type="text" id="disabledInput" class="form-control" placeholder="Disabled input">
                </div>
                <div class="form-group">
                    <label for="disabledInput">Disabled select menu</label>
                    <select id="disabledSelect" class="form-control">
                        <option>Disabled select</option>
                    </select>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Can't check this</input>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
        </form>
	</body>
</html>


