<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp_superoticabrasil' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~V^I^u t4_9r~DC7v)<S*aQ9AMImw*HvbtUJUn:C[;shsTSNmt~_w9>_%|6UO??D' );
define( 'SECURE_AUTH_KEY',  'j!$}5-l`;-(cV!_2Ucj8y(KCQc3|s=+RE&0&N)CS9;kiQ-xX:^)howWdi&xx9CNq' );
define( 'LOGGED_IN_KEY',    'yW}W]7UcbwKYwS0P  d66,gmk:F7>/vp+ye;FR3amXS^jN%_Xal%U^`zOt@dV>rg' );
define( 'NONCE_KEY',        'CfG1TXns3KV5V@[|X9jY>a!HRr/M1cRGbY~;>xa|SArM}.J~IO*.,fm.e!AM$8@&' );
define( 'AUTH_SALT',        'D]rCUcQYJn/~_@0q;`-Lje048Z>m7[{=QCPYO#2)SCQ7ZN;2.%U{4n.9M&|c]R)6' );
define( 'SECURE_AUTH_SALT', 'uZkp$jMcSD4D<y1R+|DKf)HJk/0((f7mh=7_Q?R9Csh.fabu+e:J<!%gPb|@94Np' );
define( 'LOGGED_IN_SALT',   'yLS` }xkWB[Ed n*7_020v2_~UyM>WC(?6Y7Q);:%DdX-gm9VB*k&9L#tnv>|&uD' );
define( 'NONCE_SALT',       'pO,xl8Q|PX1Kjh39]_2HGvk<pY8sKCUfnc7CZ-V*mhdI](T|`+f|F.O<pz7oIbtn' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
