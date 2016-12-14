exports.config = {
    seleniumAddress: 'http://localhost:4444/wd/hub',
    specs: ['tests/empresas/empresa_register_view-spec.js',
            'tests/alunos/register_view-spec.js',
            'tests/estagios/estagios_view-spec.js']
};