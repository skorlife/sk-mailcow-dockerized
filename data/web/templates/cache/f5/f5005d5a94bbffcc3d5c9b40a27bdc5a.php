<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.twig */
class __TwigTemplate_63b984830b0321d2c0000cca8f6b0412 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, ((array_key_exists("mailcow_locale", $context)) ? (_twig_default_filter(($context["mailcow_locale"] ?? null), "en")) : ("en")), "html", null, true);
        echo "\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0\">
  <meta name=\"theme-color\" content=\"#F5D76E\"/>
  <meta http-equiv=\"Referrer-Policy\" content=\"same-origin\">
  <title>";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "title_name", [], "any", false, false, false, 9);
        echo "</title>

  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["css_path"] ?? null), "html", null, true);
        echo "\">
  <script>
    // check if darkmode is preferred by OS or set by localStorage
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches && localStorage.getItem(\"theme\") !== \"light\" ||
        localStorage.getItem(\"theme\") === \"dark\") {
      var head  = document.getElementsByTagName('head')[0];
      var link  = document.createElement('link');
      link.id   = 'dark-mode-theme';
      link.rel  = 'stylesheet';
      link.type = 'text/css';
      link.href = '/css/themes/mailcow-darkmode.css';
      head.appendChild(link);
    }
  </script>

  <link rel=\"shortcut icon\" href=\"/favicon.png\" type=\"image/png\">
  <link rel=\"icon\" href=\"/favicon.png\" type=\"image/png\">
</head>
<body>
<div class=\"overlay\"></div>
";
        // line 31
        $this->displayBlock('navbar', $context, $blocks);
        // line 121
        echo "
<form action=\"/\" method=\"post\" id=\"logout\"><input type=\"hidden\" name=\"logout\"></form>

";
        // line 124
        if (((twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 124) && twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_active", [], "any", false, false, false, 124)) &&  !($context["is_root_uri"] ?? null))) {
            // line 125
            echo "<div class=\"container mt-4\">
  <div class=\"alert alert-";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_type", [], "any", false, false, false, 126), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 126), "html", null, true);
            echo "</div>
</div>
";
        }
        // line 129
        echo "
<div class=\"container my-4\">
";
        // line 131
        $this->displayBlock('content', $context, $blocks);
        // line 132
        echo "</div>

";
        // line 134
        $this->loadTemplate("modals/footer.twig", "base.twig", 134)->display($context);
        // line 135
        echo "
<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, ($context["js_path"] ?? null), "html", null, true);
        echo "\"></script>
<script>
  var lang_footer = ";
        // line 138
        echo ($context["lang_footer"] ?? null);
        echo ";
  var lang_acl = ";
        // line 139
        echo ($context["lang_acl"] ?? null);
        echo ";
  var lang_tfa = ";
        // line 140
        echo ($context["lang_tfa"] ?? null);
        echo ";
  var lang_fido2 = ";
        // line 141
        echo ($context["lang_fido2"] ?? null);
        echo ";
  var docker_timeout = ";
        // line 142
        echo ($context["docker_timeout"] ?? null);
        echo " * 1000;
  var mailcow_cc_role = '";
        // line 143
        echo twig_escape_filter($this->env, ($context["mailcow_cc_role"] ?? null), "html", null, true);
        echo "';
  var last_login = '";
        // line 144
        echo twig_escape_filter($this->env, ($context["last_login"] ?? null), "html", null, true);
        echo "';
  var mailcow_info = {
    version_tag: '";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 146), "html", null, true);
        echo "',
    last_version_tag: '";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "last_version_tag", [], "any", false, false, false, 147), "html", null, true);
        echo "',
    updatedAt: '";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "updated_at", [], "any", false, false, false, 148), "html", null, true);
        echo "',
    project_url: '";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_project_url", [], "any", false, false, false, 149), "html", null, true);
        echo "',
    project_owner: '";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_owner", [], "any", false, false, false, 150), "html", null, true);
        echo "',
    project_repo: '";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_repo", [], "any", false, false, false, 151), "html", null, true);
        echo "',
    branch: '";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "mailcow_branch", [], "any", false, false, false, 152), "html", null, true);
        echo "'
  };

\$(window).scroll(function() {
  sessionStorage.scrollTop = \$(this).scrollTop();
});
// Select language and reopen active URL without POST
function setLang(sel) {
  \$.post( '";
        // line 160
        echo twig_escape_filter($this->env, ($context["uri"] ?? null), "html", null, true);
        echo "', {lang: sel} );
  window.location.href = window.location.pathname + window.location.search;
}
// FIDO2 functions
function arrayBufferToBase64(buffer) {
  let binary = '';
  let bytes = new Uint8Array(buffer);
  let len = bytes.byteLength;
  for (let i = 0; i < len; i++) {
    binary += String.fromCharCode( bytes[ i ] );
  }
  return window.btoa(binary);
}
function recursiveBase64StrToArrayBuffer(obj) {
  let prefix = '=?BINARY?B?';
  let suffix = '?=';
  if (typeof obj === 'object') {
    for (let key in obj) {
      if (typeof obj[key] === 'string') {
        let str = obj[key];
        if (str.substring(0, prefix.length) === prefix && str.substring(str.length - suffix.length) === suffix) {
          str = str.substring(prefix.length, str.length - suffix.length);
          let binary_string = window.atob(str);
          let len = binary_string.length;
          let bytes = new Uint8Array(len);
          for (let i = 0; i < len; i++) {
            bytes[i] = binary_string.charCodeAt(i);
          }
          obj[key] = bytes.buffer;
        }
      } else {
        recursiveBase64StrToArrayBuffer(obj[key]);
      }
    }
  }
}
  \$(window).on('load', function() {
    \$(\".overlay\").hide();
  });
  \$(document).ready(function() {
    \$(document).on('shown.bs.modal', function(e) {
      modal_id = \$(e.relatedTarget).data('target');
      \$(modal_id).attr(\"aria-hidden\",\"false\");
    });
    // TFA, CSRF, Alerts in footer.inc.php
    // Other general functions in mailcow.js
    ";
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["alerts"] ?? null));
        foreach ($context['_seq'] as $context["alert_type"] => $context["alert_msg"]) {
            // line 207
            echo "    mailcow_alert_box('";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["alert_msg"], "js"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $context["alert_type"], "html", null, true);
            echo "');
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['alert_type'], $context['alert_msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "
    // Confirm TFA modal
  ";
        // line 211
        if (($context["pending_tfa_methods"] ?? null)) {
            // line 212
            echo "    new bootstrap.Modal(document.getElementById(\"ConfirmTFAModal\"), {
      backdrop: 'static',
      keyboard: false
    }).show();


    // validate Time based OTP tfa
    \$(\"#pending_tfa_tab_totp\").click(function(){
      \$(\".webauthn-authenticator-selection\").removeClass(\"active\");
      \$(\"#collapseWebAuthnTFA\").collapse('hide');

      // select default if only one authenticator exists
      if (\$('.totp-authenticator-selection').length == 1){
        \$('.totp-authenticator-selection').addClass(\"active\");
        var id = \$('.totp-authenticator-selection').children('input').first().val();
        \$(\"#totp_selected_id\").val(id);
        \$(\"#collapseTotpTFA\").collapse('show');
      }
    });
    \$(\".totp-authenticator-selection\").click(function(){
      \$(\".totp-authenticator-selection\").removeClass(\"active\");
      \$(this).addClass(\"active\");
      
      var id = \$(this).children('input').first().val();
      \$(\"#totp_selected_id\").val(id);

      \$(\"#collapseTotpTFA\").collapse('show');
    });
    if (\$('.totp-authenticator-selection').length == 1 &&
        \$('#pending_tfa_tab_yubi_otp').length == 0 &&
        \$('.webauthn-authenticator-selection').length == 0){
      
      // select default if only one authenticator exists
      \$('.totp-authenticator-selection').addClass(\"active\");

      var id = \$('.totp-authenticator-selection').children('input').first().val();
      \$(\"#totp_selected_id\").val(id);

      \$(\"#collapseTotpTFA\").collapse('show');
      setTimeout(function() { \$(\"#collapseTotpTFA\").find('input[name=\"token\"]').focus(); }, 1000);
    }
    \$('#pending_tfa_tab_totp').on('shown.bs.tab', function() {
      // autofocus
      setTimeout(function() { \$(\"#collapseTotpTFA\").find('input[name=\"token\"]').focus(); }, 200);
    });    
    // validate Yubi OTP tfa
    if (\$('.webauthn-authenticator-selection').length == 0){
      // autofocus
      setTimeout(function() { \$(\"#collapseYubiTFA\").find('input[name=\"token\"]').focus(); }, 1000);
    }
    \$('#pending_tfa_tab_yubi_otp').on('shown.bs.tab', function() {
      // autofocus
      \$(\"#collapseYubiTFA\").find('input[name=\"token\"]').focus();
    });
    // validate WebAuthn tfa
    \$(\"#pending_tfa_tab_webauthn\").click(function(){
      \$(\".totp-authenticator-selection\").removeClass(\"active\");

      \$(\"#collapseTotpTFA\").collapse('hide');
    });
    \$(\".webauthn-authenticator-selection\").click(function(){
      \$(\".webauthn-authenticator-selection\").removeClass(\"active\");
      \$(this).addClass(\"active\");
      
      var id = \$(this).children('input').first().val();
      \$(\"#webauthn_selected_id\").val(id);
      
      var webauthn_status_auth = document.getElementById('webauthn_status_auth');
      webauthn_status_auth.style.setProperty('display', 'flex', 'important');
      var webauthn_return_code = document.getElementById('webauthn_return_code');
      webauthn_return_code.style.setProperty('display', 'none', 'important');

      \$(\"#collapseWebAuthnTFA\").collapse('show');

      \$(this).find('input[name=token]').focus();
      if(document.getElementById(\"webauthn_auth_data\") !== null) {
        // Check Browser support
        if (!window.fetch || !navigator.credentials || !navigator.credentials.create) {
            window.alert('Browser not supported for WebAuthn.');
            return;
        }

        // fetch webauthn auth args
        window.fetch(\"/api/v1/get/webauthn-tfa-get-args\", {method:'GET',cache:'no-cache'}).then(response => {
            return response.json();
        }).then(json => {
          console.log(json);
          if (json.success === false) throw new Error();
          if (json.type === \"error\") throw new Error(json.msg);
      
          recursiveBase64StrToArrayBuffer(json);
          return json;
        }).then(getCredentialArgs => {
          // get credentials
          return navigator.credentials.get(getCredentialArgs);
        }).then(cred => {
          return {
            id: cred.rawId ? arrayBufferToBase64(cred.rawId) : null,
            clientDataJSON: cred.response.clientDataJSON  ? arrayBufferToBase64(cred.response.clientDataJSON) : null,
            authenticatorData: cred.response.authenticatorData ? arrayBufferToBase64(cred.response.authenticatorData) : null,
            signature : cred.response.signature ? arrayBufferToBase64(cred.response.signature) : null
          };
        }).then(JSON.stringify).then(function(AuthenticatorAttestationResponse) {
          // send request by submit
          var form = document.getElementById('webauthn_auth_form');
          var auth = document.getElementById('webauthn_auth_data');
          auth.value = AuthenticatorAttestationResponse;
          form.submit();
        }).catch(function(err) {
          var webauthn_status_auth = document.getElementById('webauthn_status_auth');
          webauthn_status_auth.style.setProperty('display', 'none', 'important');

          var webauthn_return_code = document.getElementById('webauthn_return_code');
          webauthn_return_code.style.setProperty('display', 'block', 'important');
          webauthn_return_code.innerHTML = lang_tfa.error_code + ': ' + err + ' ' + lang_tfa.reload_retry;
        });
      } 
    });
    \$('#ConfirmTFAModal').on('hidden.bs.modal', function(){
      // cancel pending login
      \$.ajax({
        type: \"GET\",
        cache: false,
        dataType: 'script',
        url: '/inc/ajax/destroy_tfa_auth.php',
        complete: function(data){
          window.location = window.location.href.split(\"#\")[0];
        }
      });
    });
  ";
        }
        // line 343
        echo "

    // Validate FIDO2
  \$(\"#fido2-login\").click(function(){
    \$('#fido2-alerts').html();
    if (!window.fetch || !navigator.credentials || !navigator.credentials.create) {
      window.alert('Browser not supported.');
      return;
    }
    window.fetch(\"/api/v1/get/fido2-get-args\", {method:'GET',cache:'no-cache'}).then(function(response) {
      return response.json();
    }).then(function(json) {
    if (json.success === false) {
      throw new Error();
    }
    recursiveBase64StrToArrayBuffer(json);
    return json;
    }).then(function(getCredentialArgs) {
      return navigator.credentials.get(getCredentialArgs);
    }).then(function(cred) {
      return {
        id: cred.rawId ? arrayBufferToBase64(cred.rawId) : null,
        clientDataJSON: cred.response.clientDataJSON  ? arrayBufferToBase64(cred.response.clientDataJSON) : null,
        authenticatorData: cred.response.authenticatorData ? arrayBufferToBase64(cred.response.authenticatorData) : null,
        signature : cred.response.signature ? arrayBufferToBase64(cred.response.signature) : null
      };
    }).then(JSON.stringify).then(function(AuthenticatorAttestationResponse) {
      return window.fetch(\"/api/v1/process/fido2-args\", {method:'POST', body: AuthenticatorAttestationResponse, cache:'no-cache'});
    }).then(function(response) {
      return response.json();
    }).then(function(json) {
      if (json.success) {
        window.location = window.location.href.split(\"#\")[0];
  } else {
    throw new Error();
  }
  }).catch(function(err) {
    if (typeof err.message === 'undefined') {
      mailcow_alert_box(lang_fido2.fido2_validation_failed, \"danger\");
    } else {
      mailcow_alert_box(lang_fido2.fido2_validation_failed + \":<br><i>\" + err.message + \"</i>\", \"danger\");
    }
  });
  });
  // Set TFA/FIDO2
  \$(\"#register-fido2, #register-fido2-touchid\").click(function(){
    let t = \$(this);

    \$(\"option:selected\").prop(\"selected\", false);
    if (!window.fetch || !navigator.credentials || !navigator.credentials.create) {
      window.alert('Browser not supported.');
      return;
    }

    window.fetch(\"/api/v1/get/fido2-registration/";
        // line 397
        echo twig_escape_filter($this->env, _twig_default_filter(twig_urlencode_filter(($context["mailcow_cc_username"] ?? null), true), "null"), "html", null, true);
        echo "\", {method:'GET',cache:'no-cache'}).then(function(response) {
      return response.json();
    }).then(function(json) {
      if (json.success === false) {
        throw new Error(json.msg);
      }
      recursiveBase64StrToArrayBuffer(json);

      // set attestation to node if we are registering apple touch id
      if(t.attr('id') === 'register-fido2-touchid') {
        json.publicKey.attestation = 'none';
        json.publicKey.authenticatorSelection.authenticatorAttachment = \"platform\";
      }

      return json;
    }).then(function(createCredentialArgs) {
      console.log(createCredentialArgs);
      return navigator.credentials.create(createCredentialArgs);
    }).then(function(cred) {
      return {
        clientDataJSON: cred.response.clientDataJSON  ? arrayBufferToBase64(cred.response.clientDataJSON) : null,
        attestationObject: cred.response.attestationObject ? arrayBufferToBase64(cred.response.attestationObject) : null
      };
    }).then(JSON.stringify).then(function(AuthenticatorAttestationResponse) {
      return window.fetch(\"/api/v1/add/fido2-registration\", {method:'POST', body: AuthenticatorAttestationResponse, cache:'no-cache'});
    }).then(function(response) {
      return response.json();
    }).then(function(json) {
      if (json.success) {
        window.location = window.location.href.split(\"#\")[0];
      } else {
        throw new Error(json.msg);
      }
    }).catch(function(err) {
      \$('#fido2-alerts').html('<span class=\"text-danger\"><b>' + err.message + '</b></span>');
    });
  });
  \$('#selectTFA').change(function () {
    if (\$(this).val() == \"yubi_otp\") {
      \$('#YubiOTPModal').modal('show');
      \$(\"option:selected\").prop(\"selected\", false);
    }
    if (\$(this).val() == \"totp\") {
      \$('#TOTPModal').modal('show');
      request_token = \$('#tfa-qr-img').data('totp-secret');
      \$.ajax({
        url: '/inc/ajax/qr_gen.php',
        data: {
          token: request_token,
        },
      }).done(function (result) {
        \$(\"#tfa-qr-img\").attr(\"src\", result);
      });
      \$(\"option:selected\").prop(\"selected\", false);
    }
    if (\$(this).val() == \"webauthn\") {
        // check if Browser is supported
        if (!window.fetch || !navigator.credentials || !navigator.credentials.create) {
            window.alert('Browser not supported.');
            return;
        }

        // show modal
        \$('#WebAuthnModal').modal('show');
        \$(\"option:selected\").prop(\"selected\", false);

        \$(\"#start_webauthn_register\").click(() => {
            var key_id = document.getElementsByName('key_id')[1].value;
            var confirm_password = document.getElementsByName('confirm_password')[1].value;

            // fetch WebAuthn create args
            window.fetch(\"/api/v1/get/webauthn-tfa-registration/";
        // line 468
        echo twig_escape_filter($this->env, _twig_default_filter(twig_urlencode_filter(($context["mailcow_cc_username"] ?? null), true), "null"), "html", null, true);
        echo "\", {method:'GET',cache:'no-cache'}).then(response => {
                return response.json();
            }).then(json => {
                console.log(json);
                if (json.success === false) throw new Error(json.msg);
                recursiveBase64StrToArrayBuffer(json);

                return json;
            }).then(createCredentialArgs => {
                // create credentials
                return navigator.credentials.create(createCredentialArgs);
            }).then(cred => {
                return {
                    clientDataJSON: cred.response.clientDataJSON  ? arrayBufferToBase64(cred.response.clientDataJSON) : null,
                    attestationObject: cred.response.attestationObject ? arrayBufferToBase64(cred.response.attestationObject) : null,
                    key_id: key_id,
                    tfa_method: \"webauthn\",
                    confirm_password: confirm_password
                };
            }).then(JSON.stringify).then(AuthenticatorAttestationResponse => {
                // send request
                return window.fetch(\"/api/v1/add/webauthn-tfa-registration\", {method:'POST', body: AuthenticatorAttestationResponse, cache:'no-cache'});
            }).then(response => {
                return response.json();
            }).then(json => {
                if (json.success) {
                    // reload on success
                    window.location = window.location.href.split(\"#\")[0];
                } else {
                    throw new Error(json.msg);
                }
            }).catch(function(err) {
                console.log(err);
                var webauthn_return_code = document.getElementById('webauthn_return_code');
                webauthn_return_code.style.display = webauthn_return_code.style.display === 'none' ? '' : null;
                webauthn_return_code.innerHTML = lang_tfa.error_code + ': ' + err + ' ' + lang_tfa.reload_retry;
            });
        });
    }
    if (\$(this).val() == \"none\") {
      \$('#DisableTFAModal').modal('show');
      \$(\"option:selected\").prop(\"selected\", false);
    }
  });

  ";
        // line 513
        if (($context["mailcow_cc_username"] ?? null)) {
            // line 514
            echo "  // Reload after session timeout
  var session_lifetime = ";
            // line 515
            echo twig_escape_filter($this->env, ((($context["session_lifetime"] ?? null) * 1000) + 15000), "html", null, true);
            echo ";
  setTimeout(function() {
    location.reload();
  }, session_lifetime);
  ";
        }
        // line 520
        echo "
  // CSRF
  \$('<input type=\"hidden\" value=\"";
        // line 522
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\">').attr('name', 'csrf_token').appendTo('form');
  if (sessionStorage.scrollTop != \"undefined\") {
    \$(window).scrollTop(sessionStorage.scrollTop);
  }
  });
</script>

<div class=\"container footer\">
  ";
        // line 530
        if (twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_footer", [], "any", false, false, false, 530)) {
            // line 531
            echo "  <hr><span class=\"rot-enc\">";
            echo str_rot13(twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_footer", [], "any", false, false, false, 531));
            echo "</span>
  ";
        }
        // line 533
        echo "  ";
        if (((($context["mailcow_cc_username"] ?? null) && (twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "mailcow_branch", [], "any", false, false, false, 533)) == "master")) && ((twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", true, true, false, 533)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 533))) : ("")))) {
            // line 534
            echo "  <span class=\"version\">
    🐮 + 🐋 = 💕
        Version: <a href=\"";
            // line 536
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_project_url", [], "any", false, false, false, 536), "html", null, true);
            echo "/releases/tag/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 536), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 536), "html", null, true);
            echo "
    </a>
  </span>
  ";
        }
        // line 539
        echo "  
  ";
        // line 540
        if (((($context["mailcow_cc_username"] ?? null) && (twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "mailcow_branch", [], "any", false, false, false, 540)) == "nightly")) && ((twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", true, true, false, 540)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 540))) : ("")))) {
            // line 541
            echo "  <span class=\"version\">
    🛠️🐮 + 🐋 = 💕
        Nightly: <a href=\"";
            // line 543
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_project_url", [], "any", false, false, false, 543), "html", null, true);
            echo "/commit/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_commit", [], "any", false, false, false, 543), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 543), "html", null, true);
            echo "
    </a><br>
    <span style=\"text-align:right;display:block;\">Build: ";
            // line 545
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_commit_date", [], "any", false, false, false, 545), "html", null, true);
            echo "</span>
  </span>
  ";
        }
        // line 548
        echo "</div>
</body>
</html>
";
    }

    // line 31
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top p-0\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/\"><img alt=\"mailcow-logo\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, ((array_key_exists("logo", $context)) ? (_twig_default_filter(($context["logo"] ?? null), "/img/cow_mailcow.svg")) : ("/img/cow_mailcow.svg")), "html", null, true);
        echo "\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar\" aria-controls=\"navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <i class=\"bi bi-list fs-3\"></i>
    </button>
    <div id=\"navbar\" class=\"navbar-collapse collapse\">
      <ul class=\"navbar-nav ms-auto\">
        <li class=\"nav-item\">
          <div class=\"nav-link form-check form-switch my-auto d-flex align-items-center\">
            <label class=\"form-check-label\"><i class=\"bi bi-moon-fill\"></i></label>
            <input class=\"form-check-input ms-2\" type=\"checkbox\" id=\"dark-mode-toggle\">
          </div>
        </li>
        ";
        // line 46
        if (($context["mailcow_locale"] ?? null)) {
            // line 47
            echo "        <li class=\"nav-item dropdown";
            if ((twig_length_filter($this->env, ($context["available_languages"] ?? null)) == 1)) {
                echo "lang-link-disabled";
            }
            echo "\">
          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><span class=\"flag-icon flag-icon-";
            // line 48
            echo twig_escape_filter($this->env, twig_slice($this->env, ($context["mailcow_locale"] ?? null),  -2, null), "html", null, true);
            echo "\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu \"aria-labelledby=\"languageDropdown\">
            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["available_languages"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 51
                echo "            <li>
              <a class=\"dropdown-item ";
                // line 52
                if ((($context["mailcow_locale"] ?? null) == $context["key"])) {
                    echo "active";
                }
                echo "\" href=\"?";
                echo twig_escape_filter($this->env, $this->env->getFunction('query_string')->getCallable()(["lang" => $context["key"]]), "html", null, true);
                echo "\">
                <span class=\"flag-icon flag-icon-";
                // line 53
                echo twig_escape_filter($this->env, twig_slice($this->env, $context["key"],  -2, null), "html", null, true);
                echo "\"></span>";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "
              </a>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "          </ul>
        </li>
        ";
        }
        // line 60
        echo "        ";
        if (($context["mailcow_cc_role"] ?? null)) {
            // line 61
            echo "        <li class=\"nav-item dropdown\">
          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 62), "mailcow_system", [], "any", false, false, false, 62), "html", null, true);
            echo "</a>
          <ul class=\"dropdown-menu\">
            ";
            // line 64
            if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
                // line 65
                echo "            <li><a href=\"/debug\" class=\"dropdown-item ";
                if ($this->env->getFunction('is_uri')->getCallable()("debug")) {
                    echo "active";
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 65), "debug", [], "any", false, false, false, 65), "html", null, true);
                echo "</a></li>
            <li><a href=\"/admin\" class=\"dropdown-item ";
                // line 66
                if ($this->env->getFunction('is_uri')->getCallable()("admin")) {
                    echo "active";
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 66), "mailcow_config", [], "any", false, false, false, 66), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 68
            echo "            ";
            if ((($context["mailcow_cc_role"] ?? null) != "admin")) {
                // line 69
                echo "            <li><a href=\"/user\" class=\"dropdown-item ";
                if ($this->env->getFunction('is_uri')->getCallable()("user")) {
                    echo "active";
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 69), "user_settings", [], "any", false, false, false, 69), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 71
            echo "          </ul>
        </li>
        <li class=\"nav-item dropdown\">
          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 74), "email", [], "any", false, false, false, 74), "html", null, true);
            echo "</a>
          <ul class=\"dropdown-menu\">
            ";
            // line 76
            if (((($context["mailcow_cc_role"] ?? null) == "admin") || (($context["mailcow_cc_role"] ?? null) == "domainadmin"))) {
                // line 77
                echo "            <li><a href=\"/mailbox\" class=\"dropdown-item ";
                if ($this->env->getFunction('is_uri')->getCallable()("mailbox")) {
                    echo "active";
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 77), "mailcow_config", [], "any", false, false, false, 77), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 79
            echo "            <li><a href=\"/quarantine\" class=\"dropdown-item ";
            if ($this->env->getFunction('is_uri')->getCallable()("quarantine")) {
                echo "active";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 79), "quarantine", [], "any", false, false, false, 79), "html", null, true);
            echo "</a></li>
            ";
            // line 80
            if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
                // line 81
                echo "            <li><a href=\"/queue\" class=\"dropdown-item ";
                if ($this->env->getFunction('is_uri')->getCallable()("queue")) {
                    echo "active";
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "queue", [], "any", false, false, false, 81), "queue_manager", [], "any", false, false, false, 81), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 83
            echo "            ";
            if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
                // line 84
                echo "            <li><a href=\"#\" class=\"dropdown-item\" data-bs-toggle=\"modal\" data-container=\"sogo-mailcow\" data-bs-target=\"#RestartContainer\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 84), "restart_sogo", [], "any", false, false, false, 84), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 86
            echo "          </ul>
        </li>
        ";
        }
        // line 89
        echo "        ";
        if ((($context["mailcow_apps"] ?? null) || ($context["app_links"] ?? null))) {
            // line 90
            echo "        <li class=\"nav-item dropdown\">
          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"bi bi-link-45deg me-2\"></i> ";
            // line 91
            echo twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "apps_name", [], "any", false, false, false, 91);
            echo "</a>
          <ul class=\"dropdown-menu\">
            ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mailcow_apps"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 94
                echo "              ";
                if (( !($context["skip_sogo"] ?? null) ||  !$this->env->getFunction('is_uri')->getCallable()("SOGo", twig_get_attribute($this->env, $this->source, $context["app"], "link", [], "any", false, false, false, 94)))) {
                    // line 95
                    echo "              <li ";
                    if (twig_get_attribute($this->env, $this->source, $context["app"], "description", [], "any", false, false, false, 95)) {
                        echo "title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "description", [], "any", false, false, false, 95), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                <a href=\"";
                    // line 96
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "link", [], "any", false, false, false, 96), "html", null, true);
                    echo "\" class=\"dropdown-item\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "name", [], "any", false, false, false, 96), "html", null, true);
                    echo "</a>
              </li>
              ";
                }
                // line 99
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["app_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 101
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                    // line 102
                    echo "              <li><a href=\"";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "\" class=\"dropdown-item\">";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</a></li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "          </ul>
        </li>
        ";
        }
        // line 108
        echo "        ";
        if (( !($context["dual_login"] ?? null) && ($context["mailcow_cc_username"] ?? null))) {
            // line 109
            echo "        <li class=\"logged-in-as nav-item\"><a href=\"#\" onclick=\"logout.submit()\" class=\"nav-link\"><b class=\"username-lia\">";
            echo twig_escape_filter($this->env, ($context["mailcow_cc_username"] ?? null), "html", null, true);
            echo "</b> <i class=\"bi bi-power ms-2\"></i></a></li>
        ";
        } elseif (        // line 110
($context["dual_login"] ?? null)) {
            // line 111
            echo "        <li class=\"logged-in-as nav-item\"><a href=\"#\" onclick=\"logout.submit()\" class=\"nav-link\"><b class=\"username-lia\">";
            echo twig_escape_filter($this->env, ($context["mailcow_cc_username"] ?? null), "html", null, true);
            echo " <span class=\"text-info\">(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dual_login"] ?? null), "username", [], "any", false, false, false, 111), "html", null, true);
            echo ")</span> </b><i class=\"bi bi-power ms-2\"></i></a></li>
        ";
        }
        // line 113
        echo "        ";
        if ( !($context["is_master"] ?? null)) {
            // line 114
            echo "        <li class=\"text-warning slave-info nav-item\">[ slave ]</li>
        ";
        }
        // line 116
        echo "      </ul>
    </div><!--/.nav-collapse -->
  </div><!--/.container-fluid -->
</nav>
";
    }

    // line 131
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  926 => 131,  918 => 116,  914 => 114,  911 => 113,  903 => 111,  901 => 110,  896 => 109,  893 => 108,  888 => 105,  882 => 104,  871 => 102,  866 => 101,  861 => 100,  855 => 99,  847 => 96,  838 => 95,  835 => 94,  831 => 93,  826 => 91,  823 => 90,  820 => 89,  815 => 86,  809 => 84,  806 => 83,  796 => 81,  794 => 80,  785 => 79,  775 => 77,  773 => 76,  768 => 74,  763 => 71,  753 => 69,  750 => 68,  741 => 66,  732 => 65,  730 => 64,  725 => 62,  722 => 61,  719 => 60,  714 => 57,  702 => 53,  694 => 52,  691 => 51,  687 => 50,  682 => 48,  675 => 47,  673 => 46,  658 => 34,  654 => 32,  650 => 31,  643 => 548,  637 => 545,  628 => 543,  624 => 541,  622 => 540,  619 => 539,  608 => 536,  604 => 534,  601 => 533,  595 => 531,  593 => 530,  582 => 522,  578 => 520,  570 => 515,  567 => 514,  565 => 513,  517 => 468,  443 => 397,  387 => 343,  254 => 212,  252 => 211,  248 => 209,  237 => 207,  233 => 206,  184 => 160,  173 => 152,  169 => 151,  165 => 150,  161 => 149,  157 => 148,  153 => 147,  149 => 146,  144 => 144,  140 => 143,  136 => 142,  132 => 141,  128 => 140,  124 => 139,  120 => 138,  115 => 136,  112 => 135,  110 => 134,  106 => 132,  104 => 131,  100 => 129,  92 => 126,  89 => 125,  87 => 124,  82 => 121,  80 => 31,  57 => 11,  52 => 9,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.twig", "/web/templates/base.twig");
    }
}
