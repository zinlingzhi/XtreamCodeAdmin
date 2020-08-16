<?php
/**
* @ PHP 5.6
* @ Decoder version : 1.0.0.5
* @ Release on : 22.05.2019
* @ Website    : http://EasyToYou.eu
*
* @ Zend guard decoder PHP 5.6
*/

echo '</h3>' . "\r\n\t\t" . '</header>' . "\r\n" . '        <form method="post"  autocomplete="off"  name="form" action="add_mag.php?action=add_mag">' . "\r\n" . '        <div class="module_content">' . "\r\n\r\n\t\t\t\t\t\t" . '<fieldset>' . "\r\n" . '                            <legend><b>';
echo $f9a8823715bcb54e8069e0086da240b2['user_details'];

echo b4837145a77339A6438170ED539323e2('warning', $Ccc01a49a480ad4b98dc48415a5e29fa);

echo $f9a8823715bcb54e8069e0086da240b2['add_new_mag'];
foreach ($a92088ce51f93854fd7819a3b5f2dee4 as $d5c52156ad95b0e0be4acae6ed29e1a0) {
	echo '<option value="' . $d5c52156ad95b0e0be4acae6ed29e1a0['id'] . '">' . $d5c52156ad95b0e0be4acae6ed29e1a0['package_name'] . '</option>';
}

echo $f9a8823715bcb54e8069e0086da240b2['trial_use'];

echo '<script>' . "\r\n" . '    $(document).ready(function() { ' . "\r\n" . '    $(\'#package_id\').change(function () {' . "\r\n" . '                    ' . "\r\n" . '        var package_id = $( "#package_id" ).val();' . "\r\n" . '                        ' . "\r\n" . '        $(\'#package_contains\').empty();' . "\r\n" . '        $(\'#line_type\').empty();' . "\r\n" . '        $(\'#contains_row\').fadeOut();' . "\r\n" . '        $(\'#line_type_row\').fadeOut();' . "\r\n" . '            $.ajax({' . "\r\n" . '                type: "GET",' . "\r\n" . '                url: \'add_user.php?action=package_info&id=\' + package_id,' . "\r\n" . '                success: function (result) {' . "\r\n" . '                    ' . "\r\n" . '                    result = $.parseJSON(result);' . "\r\n" . '    ' . "\r\n" . '                    if( ! jQuery.isEmptyObject( result ) )' . "\r\n" . '                    {' . "\r\n" . '                        $(\'#contains_row\').fadeIn();' . "\r\n" . '                        ' . "\r\n" . '                        $.each(result.contains, function (index, value) {' . "\r\n" . '                            $(\'#package_contains\').append("<option value=\'"+value.stream_display_name+"\'>"+value.stream_display_name+"</option>");' . "\r\n" . '                        });' . "\r\n" . '                        ' . "\r\n" . '                        $(\'#line_type_row\').fadeIn();' . "\r\n" . '                        ' . "\r\n" . '                        ' . "\r\n" . '                        $(\'#line_type\').append("<option value=\'\'>--</option>");' . "\r\n" . '                        ' . "\r\n" . '                        if(result.is_trial == 1)' . "\r\n" . '                        {' . "\r\n" . '                            $(\'#line_type\').append("<option value=\'trial\'>';

echo '] "+result.official_credits+" - [';

echo '] "+result.trial_credits+" - [';

echo '        <article class="module width_full">' . "\r\n\t\t" . '<header><h3 class="tabs_involved">';
echo '</b></legend>' . "\r\n" . '                            <table id="settings">' . "\r\n\r\n\t\t\t\t\t\t\t" . ' <td>';

echo '" class="alt_btn">' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</footer>' . "\r\n" . '    </form>' . "\r\n" . ' </article>          ' . "\r\n";

echo $f9a8823715bcb54e8069e0086da240b2['new_acc'];

echo '</td>' . "\r\n" . '                                <td>' . "\r\n" . '                                    <select name="line_type" id="line_type" required>' . "\r\n" . '                                    ' . "\r\n" . '                                    </select>' . "\r\n" . '                                    ' . "\r\n" . '                                </td>' . "\r\n" . '                            </tr>' . "\r\n" . '                                    ' . "\r\n" . '                            <tr>' . "\r\n\t\t\t\t\t\t\t" . ' <td>';

echo $f9a8823715bcb54e8069e0086da240b2['package_contains'];

echo B4837145a77339A6438170ed539323E2('error', $Fce20624c9b6567a7a8c441a4651444d);

echo '</td>' . "\r\n\t\t\t\t\t\t\t" . '  <td>' . "\r\n" . '                                    <select name="package_id" id="package_id" required>' . "\r\n" . '                                        <option value="">--</option>' . "\r\n" . '                                            ';

echo '</td>' . "\r\n" . '                                <td>' . "\r\n" . '                                    <select id="package_contains" style="height: 200px;" multiple disabled>' . "\r\n" . '                                    </select>' . "\r\n" . '                                ' . "\r\n" . '                                </td>' . "\r\n" . '                            ' . "\r\n" . '                            ' . "\r\n" . '                            </tr>   ' . "\r\n" . '                            ' . "\r\n" . '                            <tr id="line_type_row" style="display: none;">' . "\r\n" . '                                <td>';

echo B4837145a77339A6438170ed539323e2('ok', $B55f78703213d1595283266f835ca867);

echo $f9a8823715bcb54e8069e0086da240b2['credits_price'];

echo '                                        </select>                               ' . "\r\n" . '                              </td>' . "\r\n" . '                            </tr>' . "\r\n" . '                            ' . "\r\n" . '                            <tr id="contains_row" style="display: none;">' . "\r\n" . '                                <td>';

echo '] "+result.trial_duration+" "+result.trial_duration_in+"</option>");' . "\r\n" . '                        }' . "\r\n\r\n" . '                        if(result.is_official == 1)' . "\r\n" . '                        {' . "\r\n" . '                            $(\'#line_type\').append("<option value=\'official\'>';

echo ' - [';

echo $f9a8823715bcb54e8069e0086da240b2['select_package'];
echo $f9a8823715bcb54e8069e0086da240b2['line_type'];

echo '</td>' . "\r\n\t\t\t\t\t\t\t" . '  <td><input type="text" name="mac" required /></td>' . "\r\n" . '                            </tr>' . "\r\n" . '                            ' . "\r\n" . '                            <tr>' . "\r\n\t\t\t\t\t\t\t" . ' <td>';

echo $f9a8823715bcb54e8069e0086da240b2['duration'];

echo ' - [';

echo $f9a8823715bcb54e8069e0086da240b2['duration'];

if (!empty($Fce20624c9b6567a7a8c441a4651444d)) {
}

echo '           ';

if (empty($B55f78703213d1595283266f835ca867)) {
}

echo '</td>' . "\r\n\t\t\t\t\t\t\t" . '  <td><textarea name="reseller_notes"></textarea></td>' . "\r\n" . '                            </tr>                                                                                                                                                                                                                              ' . "\r\n" . '                            </table>' . "\r\n\t\t\t\t\t\t" . '</fieldset>  ' . "\r\n" . '                        ' . "\r\n\t\t\t\t" . '</div>                                                                         ' . "\r\n" . ' ' . "\t\t\t" . '<footer>' . "\r\n\t\t\t\t" . '<div class="submit_link">' . "\r\n\t\t\t\t\t" . '<input type="submit" value="';

echo $f9a8823715bcb54e8069e0086da240b2['mac_address'];
echo $f9a8823715bcb54e8069e0086da240b2['credits_price'];
echo $f9a8823715bcb54e8069e0086da240b2['notes'];

echo $f9a8823715bcb54e8069e0086da240b2['official_use'];
echo '] "+result.official_duration+" "+result.official_duration_in+"</option></option>");' . "\r\n" . '                        }' . "\r\n" . ' ' . "\r\n" . '                    } ' . "\r\n" . '                }' . "\r\n" . '            });' . "\r\n" . '    });' . "\r\n" . '        ' . "\r\n\r\n" . '});' . "\r\n" . '</script>' . "\n";

?> 
