const validateBookingForm = () => {};

const getBookingInputs = () => {
    const firstName = document.getElementById(`first_name`).value;
    const lastName = document.getElementById(`last_name`).value;
    const date = document.getElementById(`date`).value;
    const eventType = document.getElementById(`event_type`).value;
    const guests = document.getElementById(`guests`).value;
    const venue = document.getElementById(`venue`).value;
    const budget = document.getElementById(`budget`).value;

    const motifs = Array.from(
        document.querySelectorAll('input[name="motif"]:checked')
    ).map((checkbox) => checkbox.value);

    return {
        firstName: firstName,
        lastName: lastName,
        date: date,
        eventType: eventType,
        guests: guests,
        venue: venue,
        budget: budget,
        motifs: motifs,
    };
};

const handleBookingForm = async (e) => {
    e.preventDefault();

    const inputData = getBookingInputs();
    console.table(inputData);
};

export function setupBooking() {
    console.log("Running booking form logic..");

    const form = document.getElementById(`bookingForm`);

    form?.addEventListener("submit", (e) => handleBookingForm(e));
}
