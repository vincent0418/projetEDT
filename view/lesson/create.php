<form method="get" action="index.php">
    <select id="subject">
        <option value="Algo">Algo</option>
        <option value="Conception">Conception</option>
        <option value="Maths">Maths</option>
        <option value="Anglais">Anglais</option>
    </select>

    <select id="room">
        <option value="K031">K031</option>
        <option value="K127">K127</option>
    </select>

    <select id="teacher">
        <option value="BOUGERET MARIN">BOUGERET MARIN</option>
        <option value="CHIROUZE ANNE">CHIROUZE ANNE</option>
        <option value="PALLEJA NATHALIE">PALLEJA NATHALIE</option>
    </select>
    <select id="duration">
        <option value="1">1h</option>
        <option value="1.5">1h30</option>
        <option value="2">2h</option>
        <option value="2.5">2h30</option>
        <option value="3">3h</option>
    </select>
    <div id="cours">
        <input type="submit" value="Envoyer" onclick="newLesson.js"/>
    </div>
</form>
