function openRoom() {
    const roomType = document.getElementById("roomType").value;
    const roomTypes = document.querySelectorAll(".room-type");

    // Hide all room types
    roomTypes.forEach((room) => {
        room.style.display = "none";
    });

    // Show the selected room type
    const selectedRoom = document.getElementById(`${roomType}-room`);
    selectedRoom.style.display = "block";
}

// Add event listener to the dropdown
document.getElementById("roomType").addEventListener("change", openRoom);

// Add event listener to the button
document.querySelector("button").addEventListener("click", openRoom);
