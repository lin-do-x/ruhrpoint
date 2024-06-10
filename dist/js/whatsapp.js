function openWhatsApp() {
    var phoneNumber = "4917662725082";
    var message = "Hello";
    var url;

    if (/Mobi|Android/i.test(navigator.userAgent)) {
        // Mobile device
        url = "https://wa.me/" + phoneNumber + "?text=" + encodeURIComponent(message);
    } else {
        // Desktop device
        url = "https://web.whatsapp.com/send?phone=" + phoneNumber + "&text=" + encodeURIComponent(message);
    }

    window.open(url, '_blank');
}