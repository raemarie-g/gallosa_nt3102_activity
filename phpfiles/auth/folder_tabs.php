<ul class="nav auth-tabs" id="<?= !empty($registerFolderTabs) ? 'registerTabs' : 'loginTabs' ?>" role="tablist">
    <li class="nav-item" role="presentation">
        <button
            type="button"
            role="tab"
            id="<?= !empty($registerFolderTabs) ? 'reg-resident-tab' : 'resident-tab' ?>"
            class="nav-link active<?= !empty($registerFolderTabs) ? '' : ' rounded' ?>"
            data-bs-toggle="tab"
            data-bs-target="#<?= !empty($registerFolderTabs) ? 'regResident' : 'resident' ?>"
            aria-controls="<?= !empty($registerFolderTabs) ? 'regResident' : 'resident' ?>"
            aria-selected="true"
            >
            <i class="bi bi-house-fill"></i> Resident
        </button>
    </li>
    <li class="nav-item<?= !empty($registerFolderTabs) ? ' flex-fill' : '' ?>" role="presentation">
        <button
            type="button"
            role="tab"
            id="<?= !empty($registerFolderTabs) ? 'reg-official-tab' : 'official-tab' ?>"
            class="nav-link<?= !empty($registerFolderTabs) ? '' : ' rounded' ?>"
            data-bs-toggle="tab"
            data-bs-target="#<?= !empty($registerFolderTabs) ? 'regOfficial' : 'official' ?>"
            aria-controls="<?= !empty($registerFolderTabs) ? 'regOfficial' : 'official' ?>"
            aria-selected="false"
            >
            <i class="bi bi-shield-fill"></i> Official
        </button>
    </li>
</ul>
