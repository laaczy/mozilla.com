function firefoxVersion() {
        // get user-agent version for firefox browsers
        var exp = /(?:Firefox|GranParadiso|Minefield|BonEcho)\/([0-9.]+(?:[ab][^ ]+|))/;
        var matches = navigator.userAgent.match(exp);
        return matches && matches[1];
}

function whatsNewMessage() {
        var version = firefoxVersion();
        var firefox = null;

        if (version !== null) {
                firefox = {};
                firefox.version = version;

                // normalize versions for alphas and betas
                var beta = firefox.version.match(/([0-9.]+)[ab]/);
                if (beta === null) {
                        firefox.major_version = parseInt(firefox.version.split('.')[0]);
                        firefox.is_beta       = false;
                } else {
                        var major_version = beta[1];
                        major_version = parseInt(firefox.version.split('.')[0]);
                        major_version--;
                        firefox.major_version = major_version;
                        firefox.is_beta       = true;
                }
        }

        if (firefox.version != userversion) {
                document.getElementById('main-feature-title').innerHTML = message1 + firefox.version;
                document.getElementById('main-feature-contents').innerHTML = message2;
        }
}

// Surveys for 50% of people; Bugs 449417 & 466849
$(document).ready( function hideSurvey() {
    var survey = document.getElementById('survey');
    var sumo   = document.getElementById('sumo');
    if (survey) {
        var rand = Math.random();
        if (rand < 0.50) {
            if (sumo) {
                $(sumo).addClass('hide');
            }
            $(survey).removeClass('hide');
        }
    }
});
