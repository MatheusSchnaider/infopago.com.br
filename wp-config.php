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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'infopago' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'Y:|3{WuYcbGf8_*Ud<Rw_:Kg.&5cP.0]`}uZv-$A]YuqQYF3-kx<$kWP@t5>>wn^');
define('SECURE_AUTH_KEY',  '7Fk,+fk0&Z{D)8%v9<d4mlTCMv4n`9~ST[=B%z%E&l]^sj2pgz*Ym#~`_kog3J#/');
define('LOGGED_IN_KEY',    'RyinUpCq&2JMZo]Upgju~06+V,~n(%sK<+*P,|:[x[hAa(Sk0,`kF`Int?F8%yB#');
define('NONCE_KEY',        'bc#jr||he-%K0HPuc85fx7$iR,D1!.M7-F>eu&iri5UhritZ6.xSV$m%.Pa-ueu?');
define('AUTH_SALT',        '51SeS~g|-+Y2jh)+8_T.woKr_0x@Fef-%NDM@SgwfterYV`l+SK,m3K[~b qY$Y8');
define('SECURE_AUTH_SALT', '??0}}ZjJR-H~2a}xT_%>;CC2@kZ;LG_t>=w.9}o|_]A:U.c,5Nse/&zwl+_7/XkL');
define('LOGGED_IN_SALT',   '.}+Kf+p]O*90j$%&miEk{_-B~-t~k.9-f+y(ByvK|xog+wWS7TgzhQ0lp&F2)Ovy');
define('NONCE_SALT',       '19TB|zmXZV%rsT,8}Z;D6L*)wyX}*kV6uD$L[*YmsRKGxnH Xx4$B78%?xOTj2nM');

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
