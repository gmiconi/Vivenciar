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
define( 'DB_NAME', 'db_vivenciar' );

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
define( 'AUTH_KEY',         '/;=?_zrUHQ8}nRCEqno^N(tX$,ruWEx>J!=/zsNkp^#WB q!pu(y&jWU+QhkhjLR' );
define( 'SECURE_AUTH_KEY',  'L].VQ[ETMVpE(~+nNuESwv[Xz~.NxWh{x^n3S$9]4cu%u^7#?GdJ/swU{3@TXHMF' );
define( 'LOGGED_IN_KEY',    'aWl64j?h3#d^YA584vEri$L4?mKiJHW{}VZr;p8Ydrw6i#f|5yMl!#Fr9Q]CjRy3' );
define( 'NONCE_KEY',        'J}qq~a0_8K1CBO2U{f>QQ9KVQ>ckeoud3UE_Ljuh6-}E~EJ@[=O|DWch|Xg0Tdej' );
define( 'AUTH_SALT',        '@S@5+$dYQ-pGSRX60+ww<fYZcZWko3C?$i>VYwc:OXVb_8H.KM!iTG<WsiuzyX_`' );
define( 'SECURE_AUTH_SALT', '{wC5u@K$81j=9;r7(UiyG-08$%m|G9f@%M8oEjX;,xTR(]qg{UhQW#ybu+Jp3]Gq' );
define( 'LOGGED_IN_SALT',   'IwqhrU<R9N1=BK@tU9pM[qe97}&OBled4y<wwdbL&:irf`:,Fp7#Nr3uWR4xwS {' );
define( 'NONCE_SALT',       'C6AKUPu<.wi~@|Z/Z,hQ,tx0T7JJyvhpC0Vv!_L%-M9slq F!sOR.8]PM88HABlR' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
