(function () {
    var ENDPOINT = window.TELEGRAM_FUNNEL_ENDPOINT || './api/telegram-funnel-log.php';

    function telegramFunnelLog(event, details) {
        if (!event) return;
        details = details || [];
        try {
            fetch(ENDPOINT, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json;charset=UTF-8' },
                body: JSON.stringify({ event: String(event), details: details }),
                credentials: 'same-origin',
                keepalive: true
            }).catch(function () {});
        } catch (e) {}
    }

    window.telegramFunnelLog = telegramFunnelLog;
})();
