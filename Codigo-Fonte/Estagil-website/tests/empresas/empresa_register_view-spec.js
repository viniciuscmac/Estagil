describe('estagil company register page', function () {
    it('should register a new company and set name in cookies', function () {
        browser.get('http://localhost:8888/app/empresas/empresa_register.php');
        element(by.css('[name="form_nome_empresa"]')).sendKeys('tecvisa');
        element(by.css('[name="form_email_empresa"]')).sendKeys('tecvisa@google.com');
        element(by.css('[name="form_telefone_empresa"]')).sendKeys('1140041233');
        element(by.css('[name="form_area_empresa"]')).sendKeys('Tecnologia');
        element(by.css('[name="form_descricao_empresa"]')).sendKeys('trabalha na visao');
        element(by.css('[name="form_endereco_empresa"]')).sendKeys('Avenida Paulista');
        element(by.css('[name="form_senha_empresa"]')).sendKeys('tecvisa');
        element(by.css('[name="form_confirme_empresa"]')).sendKeys('tecvisa');
        element(by.css('[name="Sign"]')).click().then( function () {
        browser.manage().getCookie('empresaCadastrada').then( function (cookie) {
            console.log("cookies retornado:" + cookie);
            expect(cookie.value).toEqual('tecvisa');
        }, function (reason) {
            console.log('motivo da falha: ' + reason);
        }) }

        );

    });
});