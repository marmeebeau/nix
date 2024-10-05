const form = document.getElementById(`bookingForm`);

form.addEventListener("submit", (event) => {
    event.preventDefault();

    const firstName = document.getElementById(`first_name`).value;
    const lastName = document.getElementById(`last_name`).value;
    const date = document.getElementById(`date`).value;
    const eventType = document.getElementById(`event_type`).value;
    const guests = document.getElementById(`guests`).value;
    const venue = document.getElementById(`venue`).value;
    const budget = document.getElementById(`budget`).value;

    const motifs = [];
    const checkboxes = document.querySelectorAll('input[name="motif"]');
    for (let i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            motifs.push(checkboxes[i].value);
        }
    }

    const inputData = {
        firstName: firstName,
        lastName: lastName,
        date: date,
        eventType: eventType,
        guests: guests,
        venue: venue,
        budget: budget,
        motifs: motifs,
    };

    for (const key in inputData) {
        console.log(`${key}: ${inputData[key]}`);
    }
});
