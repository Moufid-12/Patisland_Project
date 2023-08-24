document.addEventListener("DOMContentLoaded", async function() {
    const requestedPage = window.location.pathname;

    try {
        const pageExists = await checkPageExistence(requestedPage);
        if (!pageExists) {
            redirectToErrorPage("La page que vous recherchez n'existe pas.");
        }
    } catch (error) {
        redirectToErrorPage("Une erreur s'est produite lors de la vérification de la page.");
    }
});

async function checkPageExistence(pagePath) {
    try {
        console.log(pagePath);
        const response = await fetch(pagePath);
        return response.ok;
    } catch (error) {
        return false;
    }
}

function redirectToErrorPage(errorMessage) {
    const errorPageURL = "errorPage.html";
    window.location.href = errorPageURL;
}

