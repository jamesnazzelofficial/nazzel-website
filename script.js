document.onreadystatechange = function () {
    if (document.readyState === "complete") {
        // Kapag ang dokumento ay kumpleto na nag-load
        document.getElementById('loader').style.display = 'none'; // Itago ang loader
        document.getElementById('content').style.display = 'block'; // Ipakita ang content
    }
};
