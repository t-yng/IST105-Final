<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment#8 | IST105</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
      }

      h1 {
        text-align: center;
      }

      form {
        max-width: 300px;
        margin: 0 auto;
      }

      .form-group {
        position: relative;
        margin-bottom: 15px;
      }

      label {
        margin-right: 6px;
      }

      button {
        display: block;
        margin: 0 auto;
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      button:hover {
          background-color: #0056b3;
      }
    </style>
  </head>
  <body>
    <h1>Assignment#8 IST105</h1>
    <form action="/process.php" method="GET">
      <div class="form-group">
        <h2>Select Party Items: </h2>
        <div>
          <input type="checkbox" id="cake" name="party-items[]" value="0" />
          <label for="cake">Cake</label>
        </div>
        <div>
          <input type="checkbox" id="balloons" name="party-items[]" value="1" />
          <label for="balloons">Balloons</label>
        </div>
        <div>
          <input type="checkbox" id="music_system" name="party-items[]" value="2" />
          <label for="music_system">Music System</label>
        </div>
        <div>
          <input type="checkbox" id="lights" name="party-items[]" value="3" />
          <label for="lights">Lights</label>
        </div>
        <div>
          <input type="checkbox" id="catering_service" name="party-items[]" value="4" />
          <label for="catering_service">Catering Service</label>
        </div>
        <div>
          <input type="checkbox" id="dj" name="party-items[]" value="5" />
          <label for="dj">DJ</label>
        </div>
        <div>
          <input type="checkbox" id="photo_booth" name="party-items[]" value="6" />
          <label for="photo_booth">Photo Booth</label>
        </div>
        <div>
          <input type="checkbox" id="tables" name="party-items[]" value="7" />
          <label for="tables">Tables</label>
        </div>
        <div>
          <input type="checkbox" id="chairs" name="party-items[]" value="8" />
          <label for="chairs">Chairs</label>
        </div>
        <div>
          <input type="checkbox" id="drinks" name="party-items[]" value="9" />
          <label for="drinks">Drinks</label>
        </div>
        <div>
          <input type="checkbox" id="party_hats" name="party-items[]" value="10" />
          <label for="party_hats">Party Hats</label>
        </div>
        <div>
          <input type="checkbox" id="streamers" name="party-items[]" value="11" />
          <label for="streamers">Streamers</label>
        </div>
        <div>
          <input type="checkbox" id="invitation_cards" name="party-items[]" value="12" />
          <label for="invitation_cards">Invitation Cards</label>
        </div>
        <div>
          <input type="checkbox" id="party_games" name="party-items[]" value="13" />
          <label for="party_games">Party Games</label>
        </div>
        <div>
          <input type="checkbox" id="cleaning_service" name="party-items[]" value="14" />
          <label for="cleaning_service">Cleaning Service</label>
        </div>
      </div>
      <button>Submit</button>
    </form>
  </body>
</html>
