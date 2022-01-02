$("#firstWord").html(function() {
    var text = $(this).text().trim().split(" ");
    var first = text.shift();
    return (
        (text.length > 0 ? "<span class='red'>" + first + "</span> " : first) +
        text.join(" ")
    );
});