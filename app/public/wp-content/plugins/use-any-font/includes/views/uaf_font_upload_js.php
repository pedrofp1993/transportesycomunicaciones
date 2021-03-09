<?php if ( ! defined( 'ABSPATH' ) ) exit;  ?>
<p align="right"><input type="button" name="open_add_font" onClick="open_add_font();" class="button-primary" value="Add Fonts" /><br/></p>


<div id="font-upload" style="display:none;">
    <div class="dcform">
        <?php if (!empty($GLOBALS['uaf_user_settings']['uaf_api_key'])) : ?>
            <form action="admin.php?page=use-any-font&tab=font_upload" id="open_add_font_form_js" method="post" enctype="multipart/form-data">
                 <p>
                     <label>Font Name *</label>
                     <span class="field">
                         <input type="text" name="font_name" value="" maxlength="20" class="uaf_required medium"/>
                         <span class="field_error">Please give font name.</span>
                     </span>
                 </p>

                 <p>
                     <label>Font File *</label>
                     <span class="field">
                            <input type="file" id="fontfile" name="fontfile" value="" class="uaf_required" accept=".woff,.ttf,.otf" />
                            <span class="field_error">Please select font file.</span>
                            <br/>
                            <em>Accepted Font Format : <?php echo join(", ",$GLOBALS['uaf_fix_settings']['allowedFontFormats']); ?> | Font Size: Upto <?php echo $GLOBALS['uaf_fix_settings']['allowedFontSize'] ?> MB</em><br/>
                     </span>
                 </p>
                 <p>
                     <label>&nbsp;</label>
                     <span class="field">
                            <span id="font_upload_message" class=""></span>
                             <input type="hidden" name="url" value="<?php echo base64_decode($GLOBALS['uaf_user_settings']['uaf_activated_url']); ?>" />
                            <input type="hidden" name="api_key" value="<?php echo $GLOBALS['uaf_user_settings']['uaf_api_key']; ?>" />
                            <input type="hidden" name="font_count" value="<?php echo uaf_count_uploaded_fonts(); ?>" />
                            <input type="hidden" name="convert_response" id="convert_response" value="" />
                            <input type="hidden" name="submit-uaf-font-js" id="submit-uaf-font" value="Upload" />
                            <input type="submit" name="submit-uaf-font-js" id="submit-uaf-font" class="button-primary" value="Upload" />

                            <br/>
                            <span>By clicking on Upload, you confirm that you have rights to use this font.</span>
                    </span>
                 </p>
            </form>
        <?php else: ?>
            <div class="dcinfo"><p>You need to add API key in <a href="admin.php?page=use-any-font&tab=api">API key</a> section to upload the fonts.</p></div>
        <?php endif; ?>     
    </div>
</div>

<?php include('uaf_uploaded_font_list.php'); ?>
