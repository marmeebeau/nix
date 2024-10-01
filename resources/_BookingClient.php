<main class="client-booking">
    <header>
        <h2 class="title">Booking</h2>
    </header>

    <form action="">
        <div class="fields">
            <div class="group">
                <div class="field">
                    <input id="first_name" name="first_name" placeholder="First Name" required type="text">
                </div>
                <div class="field">
                    <input id="last_name" name="last_name" placeholder="Last Name" required type="text">
                </div>
                <div class="field">
                    <input id="date" name="date" required type="date">
                </div>
            </div>
        </div>

        <div class="columns">
            <div class="fields">
                <div class="field">
                    <select name="event_type" id="event_type">
                        <option value="">Choose Event Type</option>
                    </select>
                </div>
                <div class="field">
                    <select name="guests" id="guests">
                        <option value="">Re-estimated Guests</option>
                    </select>
                </div>
                <div class="field">
                    <select name="venue" id="venue">
                        <option value="">Reception/Celebration Venue</option>
                    </select>
                </div>
                <div class="field">
                    <select name="budget" id="budget">
                        <option value="">Budget for the Whole Event</option>
                    </select>
                </div>
            </div>

            <div class="fields group">
                <label for="motifs">Select Motifs</label>
                <ul class="options">
                    <li class="option">
                        <label for="whimsical">Whimsical</label>
                        <input type="checkbox" id="whimsical" name="motif" value="Whimsical">
                    </li>
                    <li class="option">
                        <label for="vintage">Vintage</label>
                        <input type="checkbox" id="vintage" name="motif" value="Vintage">
                    </li>
                    <li class="option">
                        <label for="civil">Civil</label>
                        <input type="checkbox" id="civil" name="motif" value="Civil">
                    </li>
                    <li class="option">
                        <label for="traditional">Traditional</label>
                        <input type="checkbox" id="traditional" name="motif" value="Traditional">
                    </li>
                    <li class="option">
                        <label for="micro">Micro</label>
                        <input type="checkbox" id="micro" name="motif" value="Micro">
                    </li>
                    <li class="option">
                        <label for="elopement">Elopement</label>
                        <input type="checkbox" id="elopement" name="motif" value="Elopement">
                    </li>
                    <li class="option">
                        <label for="modern">Modern</label>
                        <input type="checkbox" id="modern" name="motif" value="Modern">
                    </li>
                    <li class="option">
                        <label for="interfaith">Interfaith</label>
                        <input type="checkbox" id="interfaith" name="motif" value="Interfaith">
                    </li>
                    <li class="option">
                        <label for="greek">Greek</label>
                        <input type="checkbox" id="greek" name="motif" value="Greek">
                    </li>
                    <li class="option">
                        <label for="bohemian">Bohemian</label>
                        <input type="checkbox" id="bohemian" name="motif" value="Bohemian">
                    </li>
                    <li class="option">
                        <label for="simple">Simple</label>
                        <input type="checkbox" id="simple" name="motif" value="Simple">
                    </li>
                    <li class="option">
                        <label for="non-religious">Non-Religious</label>
                        <input type="checkbox" id="non-religious" name="motif" value="Non-Religious">
                    </li>
                    <li class="option">
                        <label for="intimate">Intimate</label>
                        <input type="checkbox" id="intimate" name="motif" value="Intimate">
                    </li>
                    <li class="option">
                        <label for="fairytale">Fairytale</label>
                        <input type="checkbox" id="fairytale" name="motif" value="Fairytale">
                    </li>
                    <li class="option">
                        <label for="festival">Festival</label>
                        <input type="checkbox" id="festival" name="motif" value="Festival">
                    </li>
                    <li class="option">
                        <label for="black-tie">Black tie</label>
                        <input type="checkbox" id="black-tie" name="motif" value="Black tie">
                    </li>
                    <li class="option">
                        <label for="religious">Religious</label>
                        <input type="checkbox" id="religious" name="motif" value="Religious">
                    </li>
                </ul>
            </div>
        </div>
        <div class="actions">
            <button class="primary">See Recommendations</button>
        </div>
    </form>

    <div class="recommendations-wrapper">
        <header>
            <h2 class="title">Generated Recommended Event Packages</h2>
        </header>
        <div class="content">
            <div class="column">Package 1</div>
            <div class="column">Package 2</div>
            <div class="column">Package 3</div>
        </div>
    </div>
</main>
