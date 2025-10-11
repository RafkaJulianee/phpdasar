let speed = 95;
let mbappe = "Kylian Mbappe";

function getPlayerRank(speed) {
    if (speed === 95) {
        return "S Rank";
    }
    // Add more conditions for other ranks if needed
    return "Unknown Rank";
}

document.writeln(getPlayerRank(speed));