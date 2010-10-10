<?php

  return array(
  
    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------
    
    'administration tool name test_mail_settings' => 'Configurações de e-mail de teste',
    'administration tool desc test_mail_settings' => 'Enviar e-mail de teste',
    'administration tool name mass_mailer' => 'Correio em massa',
    'administration tool desc mass_mailer' => 'Enviar mensagem de texto ao usuários do sistema',
  
    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------
  
    'configuration' => 'Configuração',
    
    'mail transport mail()' => 'Configuração de e-mail',
    'mail transport smtp' => 'Servidor SMTP',
    
    'secure smtp connection no'  => 'Não',
    'secure smtp connection ssl' => 'Sim, usa SSL',
    'secure smtp connection tls' => 'Sim, usa TLS',
    
    'file storage file system' => 'File system',
    'file storage mysql' => 'Database (MySQL)',
    
    // Categories
    'config category name general' => 'Geral',
    'config category desc general' => 'Configurações gerais',
    'config category name mailing' => 'Mailing',
    'config category desc mailing' => 'Configuração para estabelecer como deverá ser feito envio de e-mails. Utilize as configurações do seu arquivo php.ini ou configurar para utilizar outro servidor SMTP',
    
    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------
    
    // General
    'config option name site_name' => 'Nome do site',
    'config option desc site_name' => 'Descrição do site',
    'config option name file_storage_adapter' => 'Armazenamento de arquivos',
    'config option desc file_storage_adapter' => 'Selecione onde os arquivos devem ser armazenados.',
    'config option name default_project_folders' => 'Pastas padrão',
    'config option desc default_project_folders' => 'Pastas criadas junto com o projeto. Cada pasta em uma linha.',
    'config option name theme' => 'Tema',
    'config option desc theme' => 'Utilizando temas pode-se mudar o visual do sistema',
    
    // activeCollab.com
    'config option name upgrade_check_enabled' => 'Ativar atualizações automaticas',
    'config option desc upgrade_check_enabled' => 'Se ativo, o sistema buscará por atualizações uma vez por dia.',
    
    // Mailing
    'config option name exchange_compatible' => 'Modo de compatibilidade com Microsoft Exchange',
    'config option desc exchange_compatible' => 'Microsoft Exchange Server.',
    'config option name mail_transport' => 'Transporte de e-mail',
    'config option desc mail_transport' => 'Pode utilizar as configurações PHP por padrão para enviar emails ou especificar um servidor SMTP',
    'config option name smtp_server' => 'servidor SMTP',
    'config option name smtp_port' => 'porta SMTP',
    'config option name smtp_authenticate' => 'Usar autenticação SMTP',
    'config option name smtp_username' => 'Usuário SMTP',
    'config option name smtp_password' => 'Senha SMTP',
    'config option name smtp_secure_connection' => 'Usar conexão SMTP segura',
    
  ); // array

?>
