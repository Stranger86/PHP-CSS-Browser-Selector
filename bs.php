<?php

/*
PHP CSS Browser Selector v1.0.0
Ian Hamilton (http://colorcrate.com)
http://bastian-allgeier.de/css_browser_selector
License: http://creativecommons.org/licenses/by/2.5/
Credits: This is a PHP port of Rafael Lima's original Javascript CSS Browser Selector (http://rafael.adm.br/css_browser_selector). The port was created by Bastian Allgeier (http://bastian-allgeier.de), however he stopped updating the plugin in favor of his PHP toolkit, Kirby (http://getkirby.com/). Ian Hamilton (http://colorcrate.com) took over, adding support for numerous versions of Firefox and currently maintains the port.

To Do:
- Fix Firefox so it doesn't need to be updated every time they release a new version
*/

function css_browser_selector($ua=null) {
		$ua = ($ua) ? strtolower($ua) : strtolower($_SERVER['HTTP_USER_AGENT']);		

		$g = 'gecko';
		$w = 'webkit';
		$s = 'safari';
		$b = array();
		
		// browser
		if(!preg_match('/opera|webtv/i', $ua) && preg_match('/msie\s(\d)/', $ua, $array)) {
				$b[] = 'ie ie' . $array[1];
		}	else if(strstr($ua, 'firefox/2')) {
				$b[] = $g . ' ff2';		
		}	else if(strstr($ua, 'firefox/3.5')) {
				$b[] = $g . ' ff3 ff3_5';
		}	else if(strstr($ua, 'firefox/3.6')) {
				$b[] = $g . ' ff3 ff3_6';
		}	else if(strstr($ua, 'firefox/4.0')) {
				$b[] = $g . ' ff4';
		}	else if(strstr($ua, 'firefox/5.0')) {
				$b[] = $g . ' ff5';
		}	else if(strstr($ua, 'firefox/6.0')) {
				$b[] = $g . ' ff6';
		}	else if(strstr($ua, 'firefox/9.0')) {
				$b[] = $g . ' ff9';
		}	else if(strstr($ua, 'firefox/8.0')) {
				$b[] = $g . ' ff8';
		}	else if(strstr($ua, 'firefox/9.0')) {
				$b[] = $g . ' ff9';
		}	else if(strstr($ua, 'firefox/10.0')) {
				$b[] = $g . ' ff10';
		}	else if(strstr($ua, 'firefox/11.0')) {
				$b[] = $g . ' ff11';
		}	else if(strstr($ua, 'firefox/12.0')) {
				$b[] = $g . ' ff12';
		}	else if(strstr($ua, 'firefox/13.0')) {
				$b[] = $g . ' ff13';
		}	else if(strstr($ua, 'firefox/14.0')) {
				$b[] = $g . ' ff14';
		}	else if(strstr($ua, 'firefox/15.0')) {
				$b[] = $g . ' ff15';
		}	else if(strstr($ua, 'firefox/16.0')) {
				$b[] = $g . ' ff16';
		}	else if(strstr($ua, 'firefox/3')) {
				$b[] = $g . ' ff3';
		} else if(strstr($ua, 'gecko/')) {
				$b[] = $g;
		} else if(preg_match('/opera(\s|\/)(\d+)/', $ua, $array)) {
				$b[] = 'opera opera' . $array[2];
		} else if(strstr($ua, 'konqueror')) {
				$b[] = 'konqueror';
		} else if(strstr($ua, 'chrome')) {
				$b[] = $w . ' chrome';
		} else if(strstr($ua, 'iron')) {
				$b[] = $w . ' ' . $s . ' iron';
		} else if(strstr($ua, 'applewebkit/')) {
				$b[] = (preg_match('/version\/(\d+)/i', $ua, $array)) ? $w . ' ' . $s . ' ' . $s . $array[1] : $w . ' ' . $s;
		} else if(strstr($ua, 'mozilla/')) {
				$b[] = $g;
		}

		// platform				
		if(strstr($ua, 'j2me')) {
				$b[] = 'mobile';
		} else if(strstr($ua, 'iphone')) {
				$b[] = 'iphone';		
		} else if(strstr($ua, 'ipod')) {
				$b[] = 'ipod';		
		} else if(strstr($ua, 'mac')) {
				$b[] = 'mac';		
		} else if(strstr($ua, 'darwin')) {
				$b[] = 'mac';		
		} else if(strstr($ua, 'webtv')) {
				$b[] = 'webtv';		
		} else if(strstr($ua, 'win')) {
				$b[] = 'win';		
		} else if(strstr($ua, 'freebsd')) {
				$b[] = 'freebsd';		
		} else if(strstr($ua, 'x11') || strstr($ua, 'linux')) {
				$b[] = 'linux';		
		}
				
		return join(' ', $b);
		
}

?>