<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

echo '</td>' . "\r\n" . '      ' . "\t" . '                       <td>' . "\r\n" . '                                 <select name="user_id" id="user_id" required>' . "\r\n" . '                                 <option value=""></option>' . "\r\n" . '                                 ';

echo ' - [';
echo $f9a8823715bcb54e8069e0086da240b2['credits_price'];

echo $f9a8823715bcb54e8069e0086da240b2['official_use'];

echo $f9a8823715bcb54e8069e0086da240b2['package_contains'];

echo '                                 </select>' . "\r\n" . '                                 </td>' . "\r\n" . '                            </tr> ' . "\r\n" . '                              ' . "\r\n" . '                            <tr>' . "\r\n\t\t\t\t\t\t\t" . ' <td>';
echo '        <article class="module width_full">' . "\r\n\t\t" . '<header><h3 class="tabs_involved">';

echo $f9a8823715bcb54e8069e0086da240b2['select_package'];
echo b4837145a77339a6438170Ed539323E2('ok', $B55f78703213d1595283266f835ca867);

echo '</h3>' . "\r\n\t\t" . '</header>' . "\r\n" . '        <form method="post"  autocomplete="off" action="extend_mag.php?action=extend">' . "\r\n" . '        <div class="module_content">' . "\r\n\r\n\t\t\t\t\t\t" . '<fieldset>' . "\r\n" . '                            <legend><b>';

echo '<script>' . "\r\n" . '$("#user_id").searchit();' . "\r\n\r\n" . '$(document).ready(function() { ' . "\r\n" . '    ' . "\r\n" . '    $(\'#package_id\').change(function () {' . "\r\n" . '                    ' . "\r\n" . '        var package_id = $( "#package_id" ).val();' . "\r\n" . '                        ' . "\r\n" . '        $(\'#package_contains\').empty();' . "\r\n" . '        $(\'#line_type\').empty();' . "\r\n" . '        $(\'#contains_row\').fadeOut();' . "\r\n" . '        $(\'#line_type_row\').fadeOut();' . "\r\n" . '            $.ajax({' . "\r\n" . '                type: "GET",' . "\r\n" . '                url: \'add_user.php?action=package_info&id=\' + package_id,' . "\r\n" . '                success: function (result) {' . "\r\n" . '                    ' . "\r\n" . '                    result = $.parseJSON(result);' . "\r\n" . '    ' . "\r\n" . '                    if( ! jQuery.isEmptyObject( result ) )' . "\r\n" . '                    {' . "\r\n" . '                        $(\'#contains_row\').fadeIn();' . "\r\n" . '                        ' . "\r\n" . '                        $.each(result.contains, function (index, value) {' . "\r\n" . '                            $(\'#package_contains\').append("<option value=\'"+value.stream_display_name+"\'>"+value.stream_display_name+"</option>");' . "\r\n" . '                        });' . "\r\n" . '                        ' . "\r\n" . '                        $(\'#line_type_row\').fadeIn();' . "\r\n" . '                        ' . "\r\n" . '                        $(\'#line_type\').append("<option value=\'\'>--</option>");' . "\r\n" . '                        ' . "\r\n" . '                        if(result.is_official == 1)' . "\r\n" . '                        {' . "\r\n" . '                            $(\'#line_type\').append("<option value=\'official\' selected>';

echo '           ';

foreach ($a92088ce51f93854fd7819a3b5f2dee4 as $d5c52156ad95b0e0be4acae6ed29e1a0) {
	echo '<option value="' . $d5c52156ad95b0e0be4acae6ed29e1a0['id'] . '">' . $d5c52156ad95b0e0be4acae6ed29e1a0['package_name'] . '</option>';
}

echo $f9a8823715bcb54e8069e0086da240b2['extend_mag'];

echo $f9a8823715bcb54e8069e0086da240b2['mag_details'];

echo $f9a8823715bcb54e8069e0086da240b2['duration'];

echo '" class="alt_btn">' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</footer>' . "\r\n" . '    </form>' . "\r\n" . ' </article>          ' . "\r\n";

echo $f9a8823715bcb54e8069e0086da240b2['search_mag'];

echo '</td>' . "\r\n" . '                                <td>' . "\r\n" . '                                    <select id="package_contains" style="height: 200px;" multiple disabled>' . "\r\n" . '                                    </select>' . "\r\n" . '                                ' . "\r\n" . '                                </td>' . "\r\n" . '                            ' . "\r\n" . '                            ' . "\r\n" . '                            </tr> ' . "\r\n" . '                            ' . "\r\n" . '                            <tr id="line_type_row" style="display: none;">' . "\r\n" . '                                <td>';
echo b4837145A77339A6438170eD539323e2('error', $Fce20624c9b6567a7a8c441a4651444d);

echo '</td>' . "\r\n" . '                                <td>' . "\r\n" . '                                    <select name="line_type" id="line_type" required>' . "\r\n" . '                                    ' . "\r\n" . '                                    </select>' . "\r\n" . '                                    ' . "\r\n" . '                                </td>' . "\r\n" . '                            </tr>                                                                                                                                                                                                                           ' . "\r\n" . '                            </table>' . "\r\n\t\t\t\t\t\t" . '</fieldset>  ' . "\r\n" . '                        ' . "\r\n\t\t\t\t" . '</div>                                                                         ' . "\r\n" . ' ' . "\t\t\t" . '<footer>' . "\r\n\t\t\t\t" . '<div class="submit_link">' . "\r\n\t\t\t\t\t" . '<input type="submit" value="';

foreach ($Cecfa885eed4e0be5ea572f6a5e134a4 as $Fa3d19831c58b4235f088f0b5e887ec4) {
	echo '<option value="' . $Fa3d19831c58b4235f088f0b5e887ec4['id'] . '">' . $Fa3d19831c58b4235f088f0b5e887ec4['mac'] . '</option>';
	$Fa3d19831c58b4235f088f0b5e887ec4['mac'] = base64_decode($Fa3d19831c58b4235f088f0b5e887ec4['mac']);
}

echo $f9a8823715bcb54e8069e0086da240b2['line_type'];

echo '] "+result.official_credits+" - [';
echo B4837145A77339a6438170ed539323e2('warning', $Ccc01a49a480ad4b98dc48415a5e29fa);
echo '</b></legend>' . "\r\n" . '                            <table id="settings">' . "\r\n" . '                            <tr>' . "\r\n\t\t\t\t\t" . '           <td>';
echo $f9a8823715bcb54e8069e0086da240b2['extend_mag'];
echo '</td>' . "\r\n\t\t\t\t\t\t\t" . '  <td>' . "\r\n" . '                                    <select name="package_id" id="package_id" required>' . "\r\n" . '                                        <option value="">--</option>' . "\r\n" . '                                            ';
echo '                                        </select>                               ' . "\r\n" . '                              </td>' . "\r\n" . '                            </tr>' . "\r\n" . '                            ' . "\r\n" . '                            <tr id="contains_row" style="display: none;">' . "\r\n" . '                                <td>';
echo '] "+result.official_duration+" "+result.official_duration_in+"</option></option>");' . "\r\n" . '                        }' . "\r\n" . ' ' . "\r\n" . '                    } ' . "\r\n" . '                }' . "\r\n" . '            });' . "\r\n" . '    });' . "\r\n" . '        ' . "\r\n\r\n" . '});' . "\r\n" . '</script>' . "\n";

?> 
