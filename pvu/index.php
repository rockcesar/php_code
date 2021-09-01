<form action="horarios_pvu.php" method="get">

    Code: <a href="https://github.com/rockcesar/php_code/tree/main/pvu">Ver código</a>
    <br/><br/>
    Este es un script para generar los horarios de PVU (Plant vs Undead) automáticamente.
    <br/><br/>
    Lo que hay que saber es el grupo, alguna hora de inicio de ese grupo, cantidad total de grupos y factor (cada cuanto tiempo cambia de grupo).
    <br/><br/>
    Y te genera todos los horarios de todos los grupos.
    <br/><br/>
    Group Quantity: <input name="group_quantity" value="6"/>
    <br/>
    Group: <input name="group" value="4"/>
    <br/>
    Hour of group: <input name="hour" value="01-9-2021 10:06:00"/>
    <br/>
    Factor: <input name="factor" value="+30 minute"/>
    <br/>
    <input type="submit" value="SUBMIT"/>

</form>
