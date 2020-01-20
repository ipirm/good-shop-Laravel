<?php /* Textolite v2.12s */
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', 'error.log');
version_compare(PHP_VERSION, '5.2', '>=') || exit('PHP ' . PHP_VERSION . ' is not supported');
define('a_', 'document_root');
define('b_', 'query_string');
define('c_', 'request_uri');
define('d_', 'php_self');
define('e_', 'http_accept_language');
define('f_', 'http_user_agent');
define('g_', 'remote_addr');
define('h_', 'server_addr');
define('i_', 'script_filename');
define('j_', 'script_name');
define('k_', 'server_name');
define('l_', 'server_protocol');
define('m_', 'lang');
define('n_', 'password');
define('o_', 'session');
define('p_', 'pass_complexity');
define('q_', 'pass_complexity_js');
define('r_', 'auth_time');
define('s_', 'auth_error_time');
define('t_', 'auth_error_list');
define('u_', 'auth_error_limit');
define('v_', 'auth_lockout_duration');
define('w_', 'auth_session_reset');
define('x_', 'auth_bot_filter');
define('y_', 'code_redraw_delay');
define('z_', 'code_undo_limit');
define('A_', 'code_highlighting');
define('_s', 'visual_ext');
define('B_', 'allowed_ext');
define('C_', 'editable_ext');
define('D_', 'default_file');
define('_Q', 'folder_size');
define('E_', 'document_root');
define('F_', 'url_rewrite');
define('G_', 'logout_to_site');
define('K_', 'site_scripts');
define('L_', 'site_styles');
define('M_', 'update_final');
define('N_', 'update_beta');
define('O_', 'cache');
define('_r', 'filelist');
define('P_', 'system_url');
define('Q_', 'error_limit');
define('R_', 'error_count');
define('S_', 'redraw_delay');
define('T_', 'mode');
define('U_', 'type');
define('V_', 'base');
define('W_', 'code');
define('X_', 'title');
define('Y_', 'version');
define('Z_', 'is_edited');
define('_a', 'post_max_size');
define('_b', 'upload_max_filesize');
define('_c', 'max_file_uploads');
define('_d', '_checkbox');
define('_m', 'http_ajax');
define('_n', 'source');
define('_o', 'token');
define('_p', 'sha1');
define('_q', 'html');
define('_t', '404');
define('_u', '403');
define('_v', 'ip');
define('_w', 'sip');
define('_x', 'url');
define('_y', 'name');
define('_z', 'date');
define('_A', 'size');
define('_B', 'list');
define('_C', 'file');
define('_D', 'error');
define('_E', 'value');
define('_F', 'radio');
define('_G', 'tmp_name');
define('_H', 'language_list');
define('_I', '<script');
define('_J', '<_cript');
define('_K', '</script');
define('_L', '</_cript');
define('_M', '</body>');
define('_N', '<!--~~?');
define('_O', '?~~-->');
define('__', 'textolite_');
final class a
{
    private $a;
    private $b;
    public function __construct()
    {
        $this->a['a'] = $_GET;
        $this->a['b'] = $_POST;
        $this->a['c'] = $_SERVER;
        $this->a['d'] = $_COOKIE;
        $this->a['e'] = $_FILES;
    }
    public function a($a)
    {
        if (isset($this->b['a'][$a])) return $this->b['a'][$a];
        else if (isset($this->a['a'][$a])) return $this->b['a'][$a] = $this->f($this->a['a'][$a], $a);
    }
    public function b($a = false)
    {
        if ($a)
        {
            if (isset($this->b['b'][$a])) return $this->b['b'][$a];
            else if (isset($this->a['b'][$a])) return $this->b['b'][$a] = $this->f($this->a['b'][$a], $a);
        }
        else if (count($this->a['b'])) return true;
    }
    public function c($a)
    {
        if (isset($this->b['c'][$a])) return $this->b['c'][$a];
        else
        {
            $b = strtoupper($a);
            if (isset($this->a['c'][$b])) return $this->b['c'][$a] = $this->f($this->a['c'][$b], $a);
        }
    }
    public function d($a)
    {
        if (isset($this->b['d'][$a])) return $this->b['d'][$a];
        else if (isset($this->a['d'][$a])) return $this->b['d'][$a] = $this->f($this->a['d'][$a], $a);
    }
    public function e($a)
    {
        if (isset($this->a['e'][$a])) return $this->a['e'][$a];
    }
    private function f($a, $b)
    {
        $c = '_' . $b;
        if (method_exists($this, $c)) return $this->$c($a);
        else return $a;
    }
    private function _server_protocol($a)
    {
        preg_match('~^[a-z]{4,5}/[0-9]\.[0-9]$~i', $a, $b);
        if (isset($b[0])) return $b[0];
    }
    private function _server_name($a)
    {
        preg_match('~^[a-z0-9-_.]{2,300}$~i', $a, $b);
        if (isset($b[0])) return $b[0];
    }
    private function _script_filename($a)
    {
        $b = str_replace('\\', '/', __FILE__);
        if (stripos($b, $this->a['c'][strtoupper(a_) ]) === 0) return $b;
        else return str_replace('\\', '/', $a);
    }
    private function _document_root($a)
    {
        $a = str_replace('\\', '/', $a);
        $b = $this->c(i_);
        $c = $this->c(d_);
        $d = $this->c(j_);
        if (stripos($b, $c) > 0) $e = str_ireplace($c, '', $b);
        if (stripos($b, $d) > 0) $f = str_ireplace($d, '', $b);
        if (isset($e))
        {
            if (isset($f))
            {
                if (strlen($e) > strlen($f)) $g = $e;
                else $g = $f;
            }
            else $g = $e;
        }
        else if (isset($f)) $g = $f;
        else $g = $a;
        if (stripos($b, $a) === 0)
        {
            if (strlen($g) > strlen($a)) $a = $g;
        }
        else $a = $g;
        if (substr($a, -1) == '/') return substr($a, 0, -1);
        return $a;
    }
    private function _php_self($a)
    {
        return str_replace('\\', '/', $a);
    }
    private function _script_name($a)
    {
        return str_replace('\\', '/', $a);
    }
    private function _query_string($a)
    {
        return str_replace('\\', '/', $a);
    }
    private function _remote_addr($a)
    {
        return $this->_ip($a);
    }
    private function _server_addr($a)
    {
        return $this->_ip($a);
    }
    private function _ip($a)
    {
        preg_match('~^[a-z0-9.:]{1,40}$~i', $a, $b);
        if (isset($b[0])) return $b[0];
    }
    private function _sha1($a)
    {
        preg_match('~^[a-z0-9]{40}$~i', $a, $b);
        if (isset($b[0])) return $b[0];
    }
}
final class b
{
    private $a;
    private $b;
    private $c;
    private $d;
    public function __construct($a)
    {
        $this->a = $a;
        $this->a('Content-type:text/html;charset=utf-8');
    }
    public function a($a)
    {
        return $this->b[] = $a;
    }
    public function b($a, $b)
    {
        return $this->b[] = $this->a . ' ' . $a . ' ' . $b;
    }
    public function c($a)
    {
        return $this->b[] = 'Location:' . $a;
    }
    public function d($a, $b = false, $c = false, $d = false, $e = false, $f = false, $g = false)
    {
        $h['a'] = $a;
        $h['b'] = $b;
        $h['c'] = $g;
        $h['d'] = (int)$c;
        $h['e'] = str_replace('%2F', '/', urlencode($d));
        $h['f'] = $e;
        $h['g'] = (int)$f;
        $this->c[] = $h;
    }
    public function e($a, $b = false, $c = false)
    {
        $this->d($a, '', time() - 60 * 60, $b, $c);
    }
    public function f($a)
    {
        return $this->d = $a;
    }
    public function g()
    {
        if (isset($this->b)) foreach ($this->b as $a) header($a);
        if (isset($this->c)) foreach ($this->c as $b) setcookie($b['a'], $b['b'], $b['d'], $b['e'], $b['f'], $b['g'], $b['c']);
        if (isset($this->d)) print $this->d;
    }
}
final class c
{
    const a = "\n";
    const b = 'lang.ini';
    const c = 'conf.ini';
    private $a;
    private $b;
    private $c;
    private $d;
    private $e;
    private $f;
    public function __construct($a, $b)
    {
        $this->c = parse_ini_file($a . self::b, true);
        $this->d = parse_ini_file($a . self::c, true);
        $this->e = array(
            'j' => '<ol><li title="{source_editor}">{type}</li><li title="{visual_editor}">text</li></ol>',
            'i' => '<ol><li>{type}</li></ol>',
            'h' => '<div id="e"><div><div><h1><a href="//textolite.ru/">Textolite</a> v{version}</h1><p>{standard}</p></div>{mode}<ul><li><a title="{files}">{files}</a><div id="f"><ol><li>{file_name}</li><li>{file_size}</li><li>{file_changed}</li><li>{file_menu}</li></ol><ul>{filelist}</ul></div></li><li><a title="{settings}">{settings}</a><div id="g"><fieldset><legend>{auth}</legend><dl><dt title="{new_password}">{new_password}:</dt><dd><input type="password" maxlength="14"><a></a></dd><dt title="{auth_error_limit_desc}">{login_attempts}:</dt><dd data-aa="5"><input type="text" maxlength="2" value="{auth_error_limit}"></dd><dt title="{auth_lockout_duration_desc}">{lockout_duration}:</dt><dd data-aa="1"><input type="text" maxlength="7" value="{auth_lockout_duration}"></dd><dt title="{auth_session_reset_desc}">{session_autoreset}:</dt><dd data-aa="60"><input type="text" maxlength="7" value="{auth_session_reset}"></dd><dd title="{logout_to_site_desc}" data-aa="0"><label>{logout_to_site_checkbox}<em></em>{redirect_to_site}</label></dd></dl></fieldset><fieldset><legend>{visual_editor}</legend><dl><dd title="{site_scripts_desc}" data-aa="1"><label>{site_scripts_checkbox}<em></em>{enable_scripts}</label></dd><dd title="{site_styles_desc}" data-aa="1"><label>{site_styles_checkbox}<em></em>{enable_styles}</label></dd></dl></fieldset><fieldset><legend>{source_editor}</legend><dl><dt title="{code_redraw_delay_desc}">{redraw_delay}:</dt><dd data-aa="200"><input type="text" maxlength="7" value="{code_redraw_delay}"></dd><dt title="{code_undo_limit_desc}">{steps_for_undo}:</dt><dd data-aa="50"><input type="text" maxlength="3" value="{code_undo_limit}"></dd><dd title="{code_highlighting_desc}" data-aa="1"><label>{code_highlighting_checkbox}<em></em>{enable_highlighting}</label></dd></dl></fieldset><fieldset><legend>{file_manager}</legend><dl><dd title="{folder_size_desc}" data-aa="1"><label>{folder_size_checkbox}<em></em>{display_catalog_size}</label></dd></dl></fieldset><fieldset><legend>{system}</legend><dl><dt title="{default_file_desc}">{main_page_or_file}:</dt><dd data-aa="index.html"><input type="text" maxlength="30" value="{default_file}"></dd><dd title="{new_version_notify}" data-aa="1"><label>{update_final_checkbox}<em></em>{new_version_notify}</label></dd><dd title="{beta_version_notify}" data-aa="0"><label>{update_beta_checkbox}<em></em>{beta_version_notify}</label></dd><dt title="{language}">{language}:</dt><dd><ul>{language_list}</ul></dd></dl></fieldset><fieldset><legend>{extended}</legend><dl><dt title="{activate}">{activate}:</dt><dd><input type="text" maxlength="7"></dd><dt><ol><li><span></span><input type="text" disabled><input type="text" disabled><i></i></li></ol><p>{attachment_domain} <strong></strong>. {attachment_notice}</p><p><input type="button" value="{attach}"><input type="button" value="{cancel}"></p></dt></dl></fieldset><p><input type="button" value="{save}" disabled><a title="{restore_settings}"></a></p></div></li></ul><ul><li><input type="button" value="{save}" title="{save}" disabled></li><li><input type="button" value="{logout}" title="{logout}" disabled data-ab="{not_save}"></li></ul><p><samp data-ac="{saving}" data-ad="{saved}" data-ae="{not_saved}" data-af="{reset_session}" data-ag="{access_closed}" data-ah="{login_again}" data-ai="{request_rejected}" data-aj="{request_blocked}" data-ak="{no_response}" data-al="{not_writable}" data-am="{old_browser}" data-an="{new_version}" data-ao="{need_update}" data-ap="{install}" data-aq="{not_install}" data-ar="{download_installer}" data-as="{system_update}" data-at="{update_error}" data-au="{install_complete}" data-av="{attachment_domain}" data-aw="{no_connect}" data-ax="{password_hashing}" data-ay="{pass_complexity}" data-az="{uploading}" data-bb="{uploading_complete}" data-bc="{uploading_error}" data-bd="{extension_error}" data-be="{count_limit}" data-bf="{size_limit}" data-bg="{file_deletion}" data-bh="{file_deleted}" data-bi="{deletion_error}" data-bj="{unknown_relation}" data-bk="{element_busy}" data-bl="{disable_script}" data-bm="{disable}" data-bn="{disabling_scripts}" data-bo="{scripts_disabled}" data-bp="{show_password}" data-bq="{hide_password}" data-br="{post_max_size}" data-bs="{upload_max_filesize}" data-bt="{max_file_uploads}" data-bu="{auth_session_reset}" data-bv="{site_scripts}" data-bw="{site_styles}" data-bx="{logout_to_site}" data-by="{ip}" data-bz="{sip}" data-bA="{system_url}" data-cc="{version}" data-cd="{update_final}" data-ce="{update_beta}"></samp><noscript><samp>{requires_javascript}</samp></noscript><i></i></p></div></div><script src="{system_url}textolite.js?v={version}"></script>',
            'a' => '<!doctype html><html id="a"><head><title>{auth} - Textolite</title><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><link rel="stylesheet" href="{system_url}textolite.css?v={version}"></head><body><fieldset><legend>{auth}</legend><ol data-cf="{error_limit}" data-cg="{error_count}"><li></li></ol><p><samp data-ax="{password_hashing}" data-ch="{password_checking}" data-ci="{access_granted}" data-cj="{access_denied}" data-ak="{no_response}" data-al="{not_writable}" data-bA="{system_url}">{document_root_error}</samp><noscript><samp>{requires_javascript}</samp></noscript><i></i></p><p><span>{password}:</span><input type="password" data-ay="{pass_complexity}" maxlength="14"><a data-bp="{show_password}" data-bq="{hide_password}"></a></p><p><input type="button" value="{login}" disabled></p></fieldset><script src="{system_url}textolite.js?v={version}"></script></body></html>',
            'e' => '<!doctype html><html id="b"><head><title>{code} - {{code}} - Textolite</title><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><link rel="stylesheet" href="{system_url}textolite.css?v={version}"></head><body><samp><span>{code}</span>{{code}}</samp>{panel}</body></html>',
            'c' => '<!doctype html><html id="d"><head><title>{title} - Textolite</title><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><link rel="stylesheet" href="{system_url}textolite.css?v={version}"></head><body><iframe>{no_frames}</iframe>{panel}<script type="text/template" id="h"><base href="{base}"></script><script type="text/template" id="i">[data-textolite-string]{outline:none;font-style:inherit;cursor:text}[data-textolite-focus]{outline:4px solid #f2ca00 !important;outline-offset:8px}[data-textolite-disabled]{outline-color:#f00 !important}</script><script type="text/template" id="j" data-ck="{is_edited}">{source}</script></body></html>',
            'd' => '<!doctype html><html id="c"><head><title>{title} - Textolite</title><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><link rel="stylesheet" href="{system_url}textolite.css?v={version}"></head><body><div><ol data-cl="<li style=height:0px></li>"></ol><pre contenteditable data-cm="{redraw_delay}" data-cn="{code_highlighting}" data-co="{code_undo_limit}"></pre></div>{panel}<script type="text/template" id="j" data-ck="{is_edited}">{source}</script></body></html>',
            'n' => '<li><ol class="r"><li><a data-cp="{url}">{name}</a></li><li data-cq="{size}"></li><li>{date}</li><li><i title="{add_file}"></i></li></ol><ul></ul></li>',
            'b' => '<li><ol class="t"><li><a data-cp="{url}">{name}</a></li><li data-cq="{size}"></li><li>{date}</li><li><i title="{delete_file}"></i><i title="{deletion_confirm}"></i><i title="{deletion_cancel}"></i></li></ol></li>',
            'm' => '<li title="{{lang}}">{radio}{lang}</li>',
            'l' => '<input type="radio" name="{name}" value="{value}">',
            'k' => '<input type="radio" name="{name}" value="{value}" checked>',
            'g' => '<input type="checkbox">',
            'f' => '<input type="checkbox" checked>'
        );
        $this->a['a'] = $a;
        $this->a['b'] = $this->g(a_);
        if (!$this->a['b']) $this->a['b'] = $b;
        $this->a['c'] = str_ireplace($this->a['b'], '', $this->a['a']);
        $this->a['d'] = $this->f($a);
        $this->a['e'] = $this->f($this->a['c']);
    }
    public function __destruct()
    {
        if ($this->f) $this->i();
    }
    public function a()
    {
        return $this->a['b'];
    }
    public function b()
    {
        return $this->a['a'];
    }
    public function c($a = false)
    {
        return $this->a['c'];
    }
    public function d()
    {
        return $this->a['d'];
    }
    public function e()
    {
        return $this->a['e'];
    }
    public function f($a)
    {
        if (substr_count($a, '/') > 2) return dirname($a) . '/';
        else return '/';
    }
    public function g($a, $b = false)
    {
        if ($b)
        {
            if (isset($this->d[$b][$a])) return $this->d[$b][$a];
        }
        else if (isset($this->d[$a])) return $this->d[$a];
    }
    public function h($a, $b, $c = false)
    {
        if ($c)
        {
            if (isset($this->d[$c]))
            {
                $this->f = true;
                return $this->d[$c][$a] = $b;
            }
        }
        else
        {
            $this->f = true;
            return $this->d[$a] = $b;
        }
    }
    private function i()
    {
        foreach ($this->d as $a => $b) if (!is_array($b)) $c[] = $a . ' = ' . $b . self::a . self::a;
        foreach ($this->d as $a => $b)
        {
            if (is_array($b))
            {
                $c[] = '[' . $a . ']' . self::a . self::a;
                foreach ($b as $d => $e) $c[] = "\t" . $d . ' = ' . $e . self::a;
                $c[] = self::a;
            }
        }
        if ($f = fopen($this->a['a'] . self::c, 'w'))
        {
            flock($f, LOCK_EX);
            fwrite($f, implode('', $c));
            flock($f, LOCK_UN);
            fclose($f);
        }
    }
    public function j()
    {
        return is_writable($this->a['a'] . self::c);
    }
    public function k($a)
    {
        if (isset($this->e[$a])) return $this->e[$a];
    }
    public function l($a, $b)
    {
        foreach ($b as $c => $d) $a = str_ireplace('{' . $c . '}', $d, $a);
        return $a;
    }
    public function m($a, $b)
    {
        preg_match_all('~\{([a-z0-9_]{2,30})\}~i', $a, $c);
        if ($c[1])
        {
            $c[1] = array_unique($c[1]);
            foreach ($c[1] as $d) if ($e = $this->n($d, $b)) $a = str_ireplace('{' . $d . '}', $e, $a);
        }
        return $a;
    }
    public function n($a, $b)
    {
        if (isset($this->c[$b][$a])) return $this->c[$b][$a];
    }
}
final class d
{
    const a = '2.12s';
    private $a;
    private $b;
    private $c;
    private $d;
    private $e;
    public function __construct($a, $b, $c)
    {
        $this->b = $a;
        $this->c = $b;
        $this->a = $c;
        $this->d = $this->g();
        $this->e = $this->h();
    }
    public function a()
    {
        $a = $this
            ->b
            ->d(__ . o_, _p);
        if ($a && $a == $this
            ->a
            ->g(o_)) $this->b();
        else
        {
            $b = time();
            $c = unserialize(urldecode($this
                ->a
                ->g(t_)));
            $d = $this
                ->a
                ->g(u_);
            $e = $this
                ->b
                ->c(g_);
            if ($c && isset($c[$e])) $f = $c[$e];
            else $f = 0;
            if ($this
                ->b
                ->b() && $this
                ->b
                ->c(_m))
            {
                $g = $this
                    ->b
                    ->b(n_, _p);
                if ($g && ($f < $d || $this
                    ->a
                    ->g(s_) + ($this
                    ->a
                    ->g(v_) * 60) < $b))
                {
                    $h = $this
                        ->a
                        ->g(n_);
                    $i = $this
                        ->a
                        ->g(q_) * 1;
                    $j = $this
                        ->a
                        ->g(p_) * 1;
                    $k = $j - $i;
                    for ($l = 0;$l < $k;$l++) $g = sha1($g);
                    if ($h == $g)
                    {
                        if ($this
                            ->a
                            ->j())
                        {
                            $this->m();
                            if (isset($c[$e]))
                            {
                                unset($c[$e]);
                                $this
                                    ->a
                                    ->h(t_, urlencode(serialize($c)));
                            }
                            if ($i < 5) $this
                                ->a
                                ->h(q_, 15000);
                            else $this
                                ->a
                                ->h(q_, $i - 1);
                            $this
                                ->a
                                ->h(r_, $b);
                            $this
                                ->a
                                ->h(O_, '');
                        }
                        else
                        {
                            $this
                                ->c
                                ->a('X-a:1');
                            $this
                                ->c
                                ->b(404, $this
                                ->a
                                ->n(_t, 'en'));
                        }
                    }
                    else
                    {
                        $this
                            ->a
                            ->h(s_, $b);
                        $c[$e] = $f + 1;
                        $this
                            ->a
                            ->h(t_, urlencode(serialize($c)));
                        $this
                            ->c
                            ->b(404, $this
                            ->a
                            ->n(_t, 'en'));
                    }
                }
                else $this
                    ->c
                    ->b(404, $this
                    ->a
                    ->n(_t, 'en'));
            }
            else
            {
                if (!$this
                    ->a
                    ->g(x_) || $this
                    ->b
                    ->c(e_) && $this
                    ->b
                    ->c(f_) && preg_match('~Chrome|Firefox|Opera|Safari|AppleWebKit|Trident|MSIE~i', $this
                    ->b
                    ->c(f_)))
                {
                    if ($f < $d || $this
                        ->a
                        ->g(s_) + ($this
                        ->a
                        ->g(v_) * 60) < $b)
                    {
                        if ($this
                            ->b
                            ->c(c_) === substr($this
                            ->a
                            ->c() , 0, -1)) throw new Exception($this
                            ->a
                            ->c() , 307);
                        $m[P_] = $this
                            ->a
                            ->c();
                        $m[Q_] = $d;
                        $m[R_] = $f;
                        $m[p_] = $this
                            ->a
                            ->g(q_);
                        $m[Y_] = self::a;
                        $n = $this
                            ->a
                            ->k('a');
                        $n = $this
                            ->a
                            ->l($n, $m);
                        $n = $this
                            ->a
                            ->m($n, $this->d);
                        $this
                            ->c
                            ->f($n);
                    }
                    else throw new Exception(false, 403);
                }
                else throw new Exception(false, 403);
            }
        }
    }
    public function b()
    {
        $aa = $this
            ->b
            ->a('q');
        $ab = $this
            ->a
            ->d() . $aa;
        if (!$aa || !preg_match('~\.[a-z]{2,5}$~i', $aa))
        {
            if ($this
                ->b
                ->c(i_) != str_replace('\\', '/', __FILE__)) $this->k();
            $ac = $this
                ->a
                ->d() . $this
                ->a
                ->g(D_);
            if (!file_exists($ac) && ($ad = $this->j())) throw new Exception($this
                ->a
                ->c() . $this->i() . $ad, 307);
            else throw new Exception($this
                ->a
                ->c() . $this->i() . $this
                ->a
                ->g(D_) , 307);
        }
        if (stripos($aa, substr($this
            ->a
            ->c() , strripos(substr($this
            ->a
            ->c() , 0, -1) , '/') + 1)) === 0) throw new Exception($this
            ->a
            ->c() . $this->i() . $this
            ->a
            ->g(D_) , 307);
        if ($this
            ->b
            ->c(_m))
        {
            if ($this
                ->b
                ->b('reload')) $this->m();
            else if ($this
                ->b
                ->b('logout')) $this->n();
            else if (($ae = $this
                ->b
                ->b('save')) && ($af = $this
                ->b
                ->b(_o, _p)) && ($af == $this
                ->b
                ->d(__ . _o, _p)))
            {
                $this
                    ->c
                    ->e(__ . _o);
                $ae = str_replace(_L, _K, base64_decode(str_replace('_', 'a', $ae)));
                $ae = str_replace(_J, _I, $ae);
                if ($this->q(strtolower(substr($ab, strripos($ab, '.') + 1))))
                {
                    if (is_writable($ab) && $ag = fopen($ab, 'w'))
                    {
                        flock($ag, LOCK_EX);
                        fwrite($ag, $ae);
                        flock($ag, LOCK_UN);
                        fclose($ag);
                        $this
                            ->a
                            ->h(O_, '');
                    }
                    else
                    {
                        $this
                            ->c
                            ->a('X-a:1');
                        $this
                            ->c
                            ->b(404, $this
                            ->a
                            ->n(_t, 'en'));
                    }
                }
                else $this
                    ->c
                    ->b(404, $this
                    ->a
                    ->n(_t, 'en'));
            }
            else if ($ah = $this
                ->b
                ->b('open'))
            {
                $ah = rawurldecode($ah);
                $this
                    ->c
                    ->f($this->w($ah));
            }
            else if (($ah = $this
                ->b
                ->b('upload')) && ($af = $this
                ->b
                ->b(_o, _p)) && ($af == $this
                ->b
                ->d(__ . _o, _p)))
            {
                $this
                    ->c
                    ->e(__ . _o);
                $ah = rawurldecode($ah);
                $ai = $this
                    ->a
                    ->d() . substr($ah, strlen($this
                    ->a
                    ->e()));
                $aj = $this
                    ->b
                    ->e(_C);
                if ($ak = count($aj) && is_dir($ai))
                {
                    $al = '';
                    $am = $this
                        ->a
                        ->k('b');
                    $an = str_replace(' ', '', str_replace(',', '|', $this
                        ->a
                        ->g(C_)));
                    foreach ($aj[_G] as $ao => $ap)
                    {
                        if ($this->q(strtolower(substr($aj[_y][$ao], strripos($aj[_y][$ao], '.') + 1))))
                        {
                            if (!$aj[_D][$ao])
                            {
                                $ab = $ai . $aj[_y][$ao];
                                move_uploaded_file($ap, $ab);
                                $aq[_y] = $aj[_y][$ao];
                                $aq[_z] = filemtime($ab);
                                $aq[_A] = filesize($ab);
                                preg_match('~\.(?:' . $an . ')$~i', $aq[_y], $ar);
                                if (isset($ar[0])) $aq[_x] = $this
                                    ->a
                                    ->c() . $this->i() . substr($ah, strlen($this
                                    ->a
                                    ->e())) . $aq[_y];
                                else $aq[_x] = $ah . $aq[_y];
                                $al .= $this
                                    ->a
                                    ->m($this
                                    ->a
                                    ->l($am, $aq) , $this->d);
                            }
                            else $as = true;
                        }
                        else $at = true;
                        if (isset($al))
                        {
                            $this
                                ->a
                                ->h(O_, '');
                            $this
                                ->c
                                ->a('X-b:' . $this->y($ah));
                            $this
                                ->c
                                ->f($al);
                        }
                        if (isset($at)) $this
                            ->c
                            ->a('X-c:1');
                        else if (isset($as)) $this
                            ->c
                            ->a('X-d:1');
                    }
                }
                else $this
                    ->c
                    ->b(404, $this
                    ->a
                    ->n(_t, 'en'));
            }
            else if (($au = $this
                ->b
                ->b('remove')) && ($af = $this
                ->b
                ->b(_o, _p)) && ($af == $this
                ->b
                ->d(__ . _o, _p)))
            {
                $this
                    ->c
                    ->e(__ . _o);
                $au = rawurldecode($au);
                if ($this->q(strtolower(substr($au, strripos($au, '.') + 1))))
                {
                    $au = str_replace($this
                        ->a
                        ->c() , $this
                        ->a
                        ->e() , $au);
                    $ab = $this
                        ->a
                        ->d() . substr($au, strlen($this
                        ->a
                        ->e()));
                    if (is_file($ab) && unlink($ab))
                    {
                        $this
                            ->a
                            ->h(O_, '');
                        $this
                            ->c
                            ->a('X-b:' . $this->y(dirname($au) . '/'));
                    }
                    else $this
                        ->c
                        ->b(404, $this
                        ->a
                        ->n(_t, 'en'));
                }
                else
                {
                    $this
                        ->c
                        ->a('X-c:1');
                    $this
                        ->c
                        ->b(404, $this
                        ->a
                        ->n(_t, 'en'));
                }
            }
            else if (($av = $this
                ->b
                ->b('settings')) && ($af = $this
                ->b
                ->b(_o, _p)) && ($af == $this
                ->b
                ->d(__ . _o, _p)))
            {
                $this
                    ->c
                    ->e(__ . _o);
                if ($av[n_])
                {
                    $aw = $this
                        ->a
                        ->g(n_);
                    $ax = $this
                        ->a
                        ->g(p_) - $this
                        ->a
                        ->g(q_);
                    for ($ay = 0;$ay < $ax;$ay++) $av[n_] = sha1($av[n_]);
                    if ($av[n_] != $aw) $this
                        ->a
                        ->h(n_, $av[n_]);
                }
                if ($av[m_] && $av[m_] != $this->d)
                {
                    if (stripos($az = $this
                        ->a
                        ->g(m_) , ',') && stripos($az, $av[m_]) !== false)
                    {
                        if ($av[m_] != $this
                            ->b
                            ->c(e_)) $this
                            ->c
                            ->d(__ . m_, $av[m_], time() + 60 * 60 * 24 * 365, $this
                            ->a
                            ->c() , false, false, true);
                        else $this
                            ->c
                            ->e(__ . m_, $this
                            ->a
                            ->c());
                    }
                    else $this
                        ->c
                        ->b(404, $this
                        ->a
                        ->n(_t, 'en'));
                }
                if ($this
                    ->a
                    ->g(D_) !== null && preg_match('~^.{1,30}$~i', $av[D_], $ar) && isset($ar[0])) $this
                    ->a
                    ->h(D_, $av[D_]);
                else $this
                    ->c
                    ->b(404, $this
                    ->a
                    ->n(_t, 'en'));
                unset($av[n_], $av[m_], $av[D_]);
                foreach ($av as $ao => $aA)
                {
                    if ($this
                        ->a
                        ->g($ao) !== null && preg_match('~^[0-9]{1,7}$~i', $aA, $ar) && isset($ar[0])) $this
                        ->a
                        ->h($ao, $aA);
                    else $this
                        ->c
                        ->b(404, $this
                        ->a
                        ->n(_t, 'en'));
                }
            }
            else if (($aB = $this
                ->b
                ->b('scripts')) && ($af = $this
                ->b
                ->b(_o, _p)) && ($af == $this
                ->b
                ->d(__ . _o, _p)))
            {
                $this
                    ->c
                    ->e(__ . _o);
                if ($this
                    ->a
                    ->g(K_) !== null) $this
                    ->a
                    ->h(K_, '0');
                else $this
                    ->c
                    ->b(404, $this
                    ->a
                    ->n(_t, 'en'));
            }
            else if (($aC = $this
                ->b
                ->b('install')) && ($af = $this
                ->b
                ->b(_o, _p)) && ($af == $this
                ->b
                ->d(__ . _o, _p)))
            {
                $this
                    ->c
                    ->e(__ . _o);
                $aD = $this
                    ->a
                    ->b() . 'update.php';
                preg_match('~^[a-z0-9+=/_]+$~i', $aC, $ar);
                if (isset($ar[0]) && ($aC = base64_decode(str_replace('_', 'a', $aC))) && ($ag = fopen($aD, 'w')))
                {
                    flock($ag, LOCK_EX);
                    $aE = fwrite($ag, $aC);
                    flock($ag, LOCK_UN);
                    fclose($ag);
                    if ($aE)
                    {
                        $aq = include $aD;
                        if ($aq == _D) $this
                            ->c
                            ->b(404, $this
                            ->a
                            ->n(_t, 'en'));
                        else if (file_exists($this
                            ->a
                            ->d() . $aq)) $this
                            ->c
                            ->f($this
                            ->a
                            ->c() . $this->i() . $aq);
                        unlink($aD);
                    }
                    else $this
                        ->c
                        ->b(404, $this
                        ->a
                        ->n(_t, 'en'));
                }
                else $this
                    ->c
                    ->b(404, $this
                    ->a
                    ->n(_t, 'en'));
            }
            else $this
                ->c
                ->b(404, $this
                ->a
                ->n(_t, 'en'));
        }
        else
        {
            $this->m();
            if (file_exists($ab))
            {
                $aF = strtolower(substr($ab, strripos($ab, '.') + 1));
                if ($this->q($aF))
                {
                    $aG = str_replace(' ', '', str_replace(',', '|', $this
                        ->a
                        ->g(_s)));
                    preg_match('~^' . $aG . '$~i', $aF, $ar);
                    if (isset($ar[0]))
                    {
                        $aH = $this
                            ->b
                            ->d(__ . _q);
                        $aI = $this
                            ->b
                            ->b('switch');
                        if ($aH)
                        {
                            if ($aI === '0')
                            {
                                $this
                                    ->c
                                    ->e(__ . _q, $this
                                    ->a
                                    ->c());
                                $this->c($ab);
                            }
                            else $this->d($ab);
                        }
                        else
                        {
                            if ($aI === '1')
                            {
                                $this
                                    ->c
                                    ->d(__ . _q, 1, time() + 60 * 60 * 24 * 90, $this
                                    ->a
                                    ->c() , false, false, true);
                                $this->d($ab);
                            }
                            else $this->c($ab);
                        }
                    }
                    else $this->d($ab);
                }
                else $this->e(_u);
            }
            else $this->e(_t);
        }
    }
    public function c($a)
    {
        $b[X_] = $this
            ->a
            ->n('visual_editor', $this->d);
        $b[P_] = $this
            ->a
            ->c();
        $b[Y_] = self::a;
        $b[V_] = $this
            ->a
            ->e();
        $c = $this
            ->b
            ->a('q');
        if ($d = strripos($c, '/')) $b[V_] .= substr($c, 0, $d + 1);
        $b['panel'] = $this->r($a);
        $b[_n] = $this->o();
        if (!$b[_n])
        {
            $b[_n] = $this->p($a);
            $b[Z_] = '';
        }
        else $b[Z_] = '1';
        $b[_n] = str_replace('{', '!~!', $b[_n]);
        $e = $this
            ->a
            ->k('c');
        $e = $this
            ->a
            ->l($e, $b);
        $e = $this
            ->a
            ->m($e, $this->d);
        $e = str_replace('!~!', '{', $e);
        $this
            ->c
            ->f($e);
    }
    public function d($a)
    {
        $b[X_] = $this
            ->a
            ->n('source_editor', $this->d);
        $b[P_] = $this
            ->a
            ->c();
        $b[Y_] = self::a;
        $b[S_] = $this
            ->a
            ->g(y_);
        $b[A_] = $this
            ->a
            ->g(A_);
        $b[z_] = $this
            ->a
            ->g(z_);
        $b['panel'] = $this->r($a);
        $b[_n] = $this->o();
        if (!$b[_n])
        {
            $b[_n] = $this->p($a);
            $b[Z_] = '';
        }
        else $b[Z_] = '1';
        $b[_n] = str_replace('{', '!~!', $b[_n]);
        $c = $this
            ->a
            ->k('d');
        $c = $this
            ->a
            ->l($c, $b);
        $c = str_replace('!~!', '{', $c);
        $this
            ->c
            ->f($c);
    }
    public function e($a)
    {
        $b[W_] = $a;
        $b[P_] = $this
            ->a
            ->c();
        $b[Y_] = self::a;
        $b['panel'] = $this->r($a);
        $c = $this
            ->a
            ->k('e');
        $c = $this
            ->a
            ->l($c, $b);
        return $this
            ->a
            ->m($c, $this->d);
    }
    public function f($a)
    {
        $this
            ->c
            ->b($a->getCode() , $this
            ->a
            ->n($a->getCode() , 'en'));
        if ($b = $a->getMessage()) $this
            ->c
            ->c($b);
        $c[W_] = $a->getCode();
        $c[P_] = $this
            ->a
            ->c();
        $c[Y_] = self::a;
        $c['panel'] = '';
        $d = $this
            ->a
            ->k('e');
        $d = $this
            ->a
            ->l($d, $c);
        return $this
            ->c
            ->f($this
            ->a
            ->m($d, $this->d));
    }
    private function g()
    {
        $a = $this
            ->a
            ->g(m_);
        if (stripos($a, ','))
        {
            $b = $this
                ->b
                ->d(__ . m_);
            if ($b && stripos($a, $b) !== false) return $b;
            else
            {
                $c = substr($this
                    ->b
                    ->c(e_) , 0, 2);
                if (stripos($a, $c) !== false) return $c;
            }
        }
        return substr($a, 0, 2);
    }
    private function h()
    {
        $a = $this
            ->a
            ->g(F_);
        if ($a === '1') return 1;
        else if ($a === '0') return 0;
        else
        {
            if ((stripos($this
                ->b
                ->c(b_) , 'q=') === 0) && (stripos($this
                ->b
                ->c(c_) , $this
                ->b
                ->c(b_)) === false)) return 1;
            else return 0;
        }
    }
    private function i()
    {
        if (!$this->e) return '?q=';
        else return '';
    }
    private function j()
    {
        $a = $this
            ->a
            ->d();
        if ($b = opendir($a))
        {
            $c = array();
            $d = array();
            $e = str_replace(' ', '', str_replace(',', '|', $this
                ->a
                ->g(_s)));
            $f = str_replace(' ', '', str_replace(',', '|', $this
                ->a
                ->g(C_)));
            while (($g = readdir($b)) !== false)
            {
                if ($g != '.' && $g != '..')
                {
                    if (is_file($a . $g))
                    {
                        if (preg_match('~^index\.(?:' . $e . ')$~i', $g))
                        {
                            closedir($b);
                            return $g;
                        }
                        else if (preg_match('~\.(?:' . $e . ')$~i', $g)) $c[] = $g;
                        else if (preg_match('~\.(?:' . $f . ')$~i', $g)) $d[] = $g;
                    }
                }
            }
            closedir($b);
            if (isset($c[0])) return $c[0];
            else if (isset($d[0])) return $d[0];
        }
    }
    private function k()
    {
        $a = $this
            ->a
            ->b() . '.htaccess';
        if (file_exists($a))
        {
            $b = file_get_contents($a);
            preg_match('~RewriteBase (.+?)\n~i', $b, $c);
            if (isset($c[0]) && isset($c[1]))
            {
                if ($c[1] != $this
                    ->a
                    ->c())
                {
                    $b = str_replace($c[0], 'RewriteBase ' . $this
                        ->a
                        ->c() . "\n", $b);
                    $this->l($b);
                }
            }
            else
            {
                $b = preg_replace('~(RewriteEngine .+?\n)~i', '$1' . "\n" . 'RewriteBase ' . $this
                    ->a
                    ->c() . "\n", $b);
                $this->l($b);
            }
        }
    }
    private function l($a)
    {
        if ($b = fopen($this
            ->a
            ->b() . '.htaccess', 'w'))
        {
            flock($b, LOCK_EX);
            fwrite($b, $a);
            flock($b, LOCK_UN);
            fclose($b);
        }
    }
    private function m()
    {
        $a = sha1(time() . mt_rand());
        $this
            ->a
            ->h(o_, $a);
        $this
            ->c
            ->d(__ . o_, $a, time() + 60 * $this
            ->a
            ->g(w_) , $this
            ->a
            ->c() , false, false, true);
    }
    private function n()
    {
        $this
            ->a
            ->h(o_, '');
        $this
            ->c
            ->e(__ . o_, $this
            ->a
            ->c());
    }
    private function o()
    {
        $a = $this
            ->b
            ->b('switch');
        if (is_numeric($a))
        {
            $b = $this
                ->b
                ->b(_n);
            if ($b && ($c = $this
                ->b
                ->b(_o)) && $c == $this
                ->b
                ->d(__ . _o))
            {
                $b = base64_decode(str_replace('_', 'a', $b));
                $this
                    ->c
                    ->a('X-e:0');
                $this
                    ->c
                    ->e(__ . _o);
                return $b;
            }
        }
    }
    private function p($a)
    {
        $b = file_get_contents($a);
        preg_match('~<meta[^>]+utf-8~i', $b, $c);
        preg_match('~<meta[^>]+windows-1251~i', $b, $d);
        if (!isset($c[0]) && isset($d[0]))
        {
            $b = preg_replace('~(<meta[^>]+)windows-1251~i', '$1utf-8', $b);
            $b = iconv('Windows-1251', 'UTF-8', $b);
        }
        $b = str_replace(_K, _L, $b);
        return str_replace(_I, _J, $b);
    }
    private function q($a)
    {
        $b = $this
            ->a
            ->g(B_);
        if (!$b || preg_match('~(?:^|,\s*)' . $a . '(?:\s*,|$)~i', $b)) return true;
    }
    private function r($a)
    {
        $b[T_] = $this->s($a);
        $b[_r] = $this->v();
        $b[P_] = $this
            ->a
            ->c();
        $b[Y_] = self::a;
        $b[_b] = $this->u(ini_get(_b));
        $b[_c] = ini_get(_c);
        $b[p_] = $this
            ->a
            ->g(q_);
        $b[u_] = $this
            ->a
            ->g(u_);
        $b[v_] = $this
            ->a
            ->g(v_);
        $b[w_] = $this
            ->a
            ->g(w_);
        $b[G_] = $this
            ->a
            ->g(G_);
        if ($b[G_]) $b[G_ . _d] = $this
            ->a
            ->k('f');
        else $b[G_ . _d] = $this
            ->a
            ->k('g');
        $b[K_] = $this
            ->a
            ->g(K_);
        if ($b[K_]) $b[K_ . _d] = $this
            ->a
            ->k('f');
        else $b[K_ . _d] = $this
            ->a
            ->k('g');
        $b[L_] = $this
            ->a
            ->g(L_);
        if ($b[L_]) $b[L_ . _d] = $this
            ->a
            ->k('f');
        else $b[L_ . _d] = $this
            ->a
            ->k('g');
        $b[y_] = $this
            ->a
            ->g(y_);
        $b[z_] = $this
            ->a
            ->g(z_);
        if ($this
            ->a
            ->g(A_)) $b[A_ . _d] = $this
            ->a
            ->k('f');
        else $b[A_ . _d] = $this
            ->a
            ->k('g');
        if ($this
            ->a
            ->g(_Q)) $b[_Q . _d] = $this
            ->a
            ->k('f');
        else $b[_Q . _d] = $this
            ->a
            ->k('g');
        $b[D_] = $this
            ->a
            ->g(D_);
        $b[M_] = $this
            ->a
            ->g(M_);
        if ($b[M_]) $b[M_ . _d] = $this
            ->a
            ->k('f');
        else $b[M_ . _d] = $this
            ->a
            ->k('g');
        $b[N_] = $this
            ->a
            ->g(N_);
        if ($b[N_]) $b[N_ . _d] = $this
            ->a
            ->k('f');
        else $b[N_ . _d] = $this
            ->a
            ->k('g');
        $b[_v] = $this
            ->b
            ->c(g_);
        $b[_w] = $this
            ->b
            ->c(h_);
        $b[_a] = $this->u(ini_get(_a));
        $b[_H] = $this->t();
        $c = $this
            ->a
            ->k('h');
        $c = $this
            ->a
            ->l($c, $b);
        return $this
            ->a
            ->m($c, $this->d);
    }
    private function s($a)
    {
        if (is_numeric($a))
        {
            $b[U_] = $a;
            $c = $this
                ->a
                ->k('i');
        }
        else
        {
            $d = strtolower(substr($a, strripos($a, '.') + 1));
            $e = str_replace(' ', '', str_replace(',', '|', $this
                ->a
                ->g(_s)));
            preg_match('~^' . $e . '$~i', $d, $f);
            if (isset($f[0])) $c = $this
                ->a
                ->k('j');
            else $c = $this
                ->a
                ->k('i');
            if ($d == 'htm') $b[U_] = _q;
            else $b[U_] = $d;
        }
        $c = $this
            ->a
            ->l($c, $b);
        return $this
            ->a
            ->m($c, $this->d);
    }
    private function t()
    {
        $a = '';
        $b = explode(',', $this
            ->a
            ->g(m_));
        $c[_y] = m_;
        foreach ($b as $d)
        {
            $c[_E] = trim($d);
            if ($this->d == $c[_E]) $e = $this
                ->a
                ->k('k');
            else $e = $this
                ->a
                ->k('l');
            $f[_F] = $this
                ->a
                ->l($e, $c);
            $f[m_] = $c[_E];
            $g = $this
                ->a
                ->k('m');
            $g = $this
                ->a
                ->l($g, $f);
            $a .= $this
                ->a
                ->m($g, $this->d);
        }
        return $a;
    }
    private function u($a)
    {
        $a = strtolower(trim($a));
        $b = (int)$a;
        switch ($a[strlen($a) - 1])
        {
            case 'm':
                return $b * 1048576;
            case 'k':
                return $b * 1024;
            case 'g':
                return $b * 1073741824;
            default:
                return $b;
        }
    }
    private function v()
    {
        $a = $this
            ->a
            ->e();
        $b = $this
            ->a
            ->d();
        if ($a == '/') $c[_y] = $this
            ->b
            ->c(k_);
        else $c[_y] = substr($a, strrpos(substr($a, 0, -1) , '/') + 1, -1);
        $c[_z] = filemtime($b);
        $c[_x] = $a;
        $c[_A] = '';
        $d = $this
            ->a
            ->k('n');
        $d = $this
            ->a
            ->l($d, $c);
        return $this
            ->a
            ->m($d, $this->d);
    }
    private function w($a)
    {
        $b = $this
            ->a
            ->d() . substr($a, strlen($this
            ->a
            ->e()));
        $c = array();
        $d = array();
        $e = str_replace(' ', '', str_replace(',', '|', $this
            ->a
            ->g(C_)));
        if ($f = opendir($b))
        {
            while (($g = readdir($f)) !== false)
            {
                if ($g != '.' && $g != '..')
                {
                    $h = array();
                    $h[_y] = $g;
                    $h[_z] = filemtime($b . $g);
                    if (is_file($b . $g))
                    {
                        preg_match('~\.(?:' . $e . ')$~i', $g, $i);
                        if (isset($i[0])) $h[_x] = $this
                            ->a
                            ->c() . $this->i() . substr($a, strlen($this
                            ->a
                            ->e())) . $g;
                        else $h[_x] = $a . $g;
                        $h[_A] = filesize($b . $g);
                        $d[] = $h;
                    }
                    else if (is_dir($b . $g) && !is_link($b . $g))
                    {
                        $h[_x] = $a . $g . '/';
                        $h[_A] = $this->y($h[_x]);
                        $c[] = $h;
                    }
                }
            }
            closedir($f);
        }
        $j = '';
        if (count($c))
        {
            $c = $this->x($c);
            $k = $this
                ->a
                ->k('n');
            foreach ($c as $l)
            {
                $m = $k;
                $j .= $this
                    ->a
                    ->m($this
                    ->a
                    ->l($m, $l) , $this->d);
            }
        }
        if (count($d))
        {
            $d = $this->x($d);
            $n = $this
                ->a
                ->k('b');
            foreach ($d as $o) $j .= $this
                ->a
                ->m($this
                ->a
                ->l($n, $o) , $this->d);
        }
        if ($b == $this
            ->a
            ->d()) $this
            ->c
            ->a('X-b:' . $this->y($a));
        return $j;
    }
    private function x($a)
    {
        $b = array();
        $c = array();
        foreach ($a as $d) $b[] = $d[_y];
        asort($b);
        foreach ($b as $e) foreach ($a as $d) if ($e == $d[_y]) $c[] = $d;
        return $c;
    }
    private function y($a)
    {
        if ($this
            ->a
            ->g(_Q))
        {
            $b = $this
                ->a
                ->g(O_);
            if (!$b)
            {
                $b = $this->z($this
                    ->a
                    ->e());
                $this
                    ->a
                    ->h(O_, urlencode(serialize($b)));
            }
            else $b = unserialize(urldecode($b));
            return $b[$a];
        }
        else return '';
    }
    private function z($a)
    {
        $b = $this
            ->a
            ->d() . substr($a, strlen($this
            ->a
            ->e()));
        $c = array();
        $c[$a] = 0;
        if ($d = opendir($b))
        {
            while (($e = readdir($d)) !== false)
            {
                if ($e != '.' && $e != '..')
                {
                    if (is_file($b . $e)) $c[$a] += filesize($b . $e);
                    else if (is_dir($b . $e . '/') && !is_link($b . $e))
                    {
                        $f = $this->z($a . $e . '/');
                        $c[$a] += $f[$a . $e . '/'];
                        $c = array_merge($c, $f);
                    }
                }
            }
            closedir($d);
        }
        return $c;
    }
}
$a = new a();
$b = new b($a->c(l_));
$c = new c(dirname($a->c(i_)) . '/', $a->c(a_));
$d = new d($a, $b, $c);
try
{
    $d->a();
}
catch(Exception $e)
{
    $d->f($e);
}
$b->g(); ?>
