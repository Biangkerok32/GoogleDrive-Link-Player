<iframe width="100%" height="500" src="<?php echo $linkStream02;?>" frameborder="0" allow="autoplay;encrypted-media" scroling="no" allowfullscreen></iframe>
<div style="text-align: center;" class="form-inline">
    <a onclick="href='<?php echo $linkDownPrivate;?>'" role="button" class="btn btn-primary">
        Download
        <?php echo $getFileName;?>
    </a>
    | <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-sm">Embed Video</button> |
    <a role="button" type="button" class="btn btn-warning" onclick="href='https://apps.heirro.net/gdrive/'">Back to Generator</a>
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <b>Copy this code: </b><br />
                <textarea class="form-control" rows="5" cols="38" onclick="this.focus();this.select();" readonly>&lt;embed src="<?php echo $linkStream02;?>" width="100%" height="463" &gt;</textarea>
            </div>
        </div>
    </div>
</div>
