<form id="contact" method="post" action="contact">
    <label>Voornaam</label><br>
    <input type="text" name="firstName">
    <br>
    <label>Achternaam</label><br>
    <input type="text" name="lastName">
    <br>
    <label>Email</label><br>
    <input type="text" name="email">
    <br>
    <label>Campus</label><br>
    <select id="selectboxCampus" name="departement">
        <option value=""></option>
        <option value="Design en technologie">Design en technologie</option>
        <option value="Management, media & maatschappij">Management, media & maatschappij</option>
        <option value="Gezondheidszorg & Landsschapsarchitectuur">Gezondheidszorg & Landsschapsarchitectuur</option>
        <option value="Onderwijs & Pedagogie">Onderwijs & Pedagogie</option>
        <option value="Koninklijk Conservatorium Brussel">oninklijk Conservatorium Brussel</option>
        <option value="RITCS">RITCS</option>
        <option value="EXT">Extern</option>
    </select>
    <br>
    <label>Type</label><br>
    <input type="text" name="type">
    <br>
    <label>Vraag</label><br>
    <textarea  name="message"></textarea>
    <br>
    <input type="submit" value="verzenden">
</form>