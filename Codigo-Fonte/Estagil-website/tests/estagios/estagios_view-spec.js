describe('estagil estagios page', function () {
    it('should list estagios and get details', function () {
        browser.get('http://localhost:8888/index.php');

        element(by.css('[name="linkEstagios"]')).click();
        expect(browser.getCurrentUrl()).toEqual("http://localhost:8888/app/estagios/estagios.php");

        element(by.css('[id="detalhe-btn"]')).click().then(
            function (cookie) {
                console.log("cookies retornado:" + cookie);
                expect(cookie).toEqual('idVaga');
            }, function (reason) {
                console.log('motivo da falha: ' + reason);
            });

    });
});