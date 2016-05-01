<?php include ("header.php"); ?>
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script src="filter/dsj-script.js"></script>
  <link rel="stylesheet" href="css/dsj-style.css" media="all" />
<div id="dsj-main">
    <form name="myform" action="" method="post" enctype="application/x-www-form-urlencoded">
        <h1>Tabela</h1>
        <div class="dsj-row">
            <div class="dsj-filter">
            	<input type="text" id="searchallInput" />
            </div>
            <table width="100%" border="1" cellpadding="5" cellspacing="0" id="dsj-tableFilter" id="table">
            <thead>
                <tr>
                    <th data-type="filter" width="50">#</th>
                    <th data-type="filter">Ime</th>
                    <th data-type="filter">Priimek</th>
                    <th data-type="filter">Predmet</th>
                    <th data-type="filter" width="100">Ocena</th>
                </tr>
                <tr class="search-row">
                    <th>&nbsp;</th>
                    <th><input type="text" class="searchInput" /></th>
                    <th><input type="text" class="searchInput" /></th>
                    <th><input type="text" class="searchInput" /></th>
                    <th><input type="text" class="searchInput" /></th>
                </tr>
            </thead>
            <tbody>
                <?php
        include ('db_brodej.php');
        
        $sql=$db->query("SELECT * FROM `ocene` 
INNER JOIN dijak as d ON ocene.id_d=d.id_d
INNER JOIN predmet as p on ocene.id_p=p.id_p
WHERE 1");
        
        if($sql->rowCount()>0)
        {
            $i=0;
            while($row=$sql->fetch(PDO::FETCH_ASSOC))
            {
                echo "<tr><td>".$i."</td><td>".$row['ime']."</td><td>".$row['priimek']."</td><td>".$row['ime_predmeta']."</td><td>".$row['ocena']."</td></tr>";
                $i++;
            }
        }
        ?>
            </tbody>
            </table>
        </div>
    </form>
</div> 
<script type="text/javascript">
	$(document).ready(function(e) {
        $('#dsj-tableFilter').dsjtableFilter();
    });
</script> 
<?php include ("footer.php"); ?>
