<?php
if (!defined('_MARICMS_')) exit;
define('MARI_MYSQL_HOST', 'localhost');
define('MARI_MYSQL_USER', 'eventtpl01');
define('MARI_MYSQL_PASSWORD', 'eventtpl015754!@#');
define('MARI_MYSQL_DB', 'eventtpl01');
define('MARI_MYSQL_SET_MODE', false);
define('MARI_TABLE_PREFIX', 'mari_');
$mari['write_prefix'] = MARI_TABLE_PREFIX.'write_'; // �Խ��� ���̺�� ���λ�
$mari['config_table'] = MARI_TABLE_PREFIX.'config'; // �⺻ȯ�� ���� ���̺�
$mari['group_table'] = MARI_TABLE_PREFIX.'board_group'; // �Խ��� �׷� ���̺�
$mari['board_table'] = MARI_TABLE_PREFIX.'board'; // �Խ��� ���� ���̺�
$mari['board_file_table'] = MARI_TABLE_PREFIX.'board_file'; // �Խ��� ÷������ ���̺�
$mari['board_write_table'] = MARI_TABLE_PREFIX.'write'; // �Խù� ���̺�
$mari['mail_table'] = MARI_TABLE_PREFIX.'mail'; // ȸ������ ���̺�
$mari['member_table'] = MARI_TABLE_PREFIX.'member'; // ȸ�� ���̺�
$mari['member_leave_table'] = MARI_TABLE_PREFIX.'member_leave'; // Ż��ȸ�� ���̺�
$mari['emoney_table'] = MARI_TABLE_PREFIX.'emoney'; // �̸Ӵ� ���̺�
$mari['popular_table'] = MARI_TABLE_PREFIX.'popular'; // �α�˻��� ���̺�
$mari['session_table'] = MARI_TABLE_PREFIX.'session'; // ���� ���̺�
$mari['content_table'] = MARI_TABLE_PREFIX.'content'; // ����(������)���� ���̺�
$mari['mysevice_config_table'] = MARI_TABLE_PREFIX.'mysevice_config'; // ���Ǽ��񽺰��� ���̺�
$mari['analytics_config_table'] = MARI_TABLE_PREFIX.'analytics_config'; // �α׺м�-���θ�ƽ������ ���̺�
$mari['debt_table'] = MARI_TABLE_PREFIX.'debt'; // �����ǰ ���̺�
$mari['inset_table'] = MARI_TABLE_PREFIX.'inset'; // �����ѵ���ü���������� ���̺�
$mari['invest_table'] = MARI_TABLE_PREFIX.'invest'; // ����(��������) ���̺�
$mari['invest_progress_table'] = MARI_TABLE_PREFIX.'invest_progress'; // ����(������������) ���̺�
$mari['loan_table'] = MARI_TABLE_PREFIX.'loan'; // ����(�����û) ���̺�
$mari['pg_table'] = MARI_TABLE_PREFIX.'pg'; // PG�缳�� ���̺�
$mari['contact_item_table'] = MARI_TABLE_PREFIX.'contact_item'; // ��ǰ�з� ���̺�
$mari['outpay_table'] = MARI_TABLE_PREFIX.'outpay'; // ��ݽ�û ���̺�
$mari['char_table'] = MARI_TABLE_PREFIX.'char'; // �������� ���̺�
$mari['order_table'] = MARI_TABLE_PREFIX.'order'; // ����,������ �������̺�
$mari['log_table'] = MARI_TABLE_PREFIX.'log'; // �α׺м� ���̺�
$mari['log_sum_table'] = MARI_TABLE_PREFIX.'log_sum'; // �α״������Ӽ� ���̺�
$mari['category'] = MARI_TABLE_PREFIX.'category'; // ī�װ� ���̺�
$mari['viewcomment'] = MARI_TABLE_PREFIX.'viewcomment'; // invest��� ���̺�
?>