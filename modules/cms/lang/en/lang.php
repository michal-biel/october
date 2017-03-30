<?php

return [
    'cms_object' => [
        'invalid_file' => 'Invalid file name: :name. File names can contain only alphanumeric symbols, underscores, dashes and dots. Some examples of correct file names: page.htm, page, subdirectory/page',
        'invalid_property' => "The property ':name' cannot be set",
        'file_already_exists' => "File ':name' already exists.",
        'error_saving' => "Error saving file ':name'. Please check write permissions.",
        'error_creating_directory' => 'Error creating directory :name. Please check write permissions.',
        'invalid_file_extension'=>'Invalid file extension: :invalid. Allowed extensions are: :allowed.',
        'error_deleting' => "Error deleting the template file ':name'. Please check write permissions.",
        'delete_success' => 'Templates deleted: :count.',
        'file_name_required' => 'The File Name field is required.',
        'safe_mode_enabled' => 'Safe mode is currently enabled.'
    ],
    'dashboard' => [
        'active_theme' => [
            'widget_title_default' => 'Website',
            'online' => 'Online',
            'maintenance' => 'In maintenance',
            'manage_themes' => 'Manage themes'
        ]
    ],
    'theme' => [
        'not_found_name' => "The theme ':name' is not found.",
        'active' => [
            'not_set' => 'The active theme is not set.',
            'not_found' => 'The active theme is not found.'
        ],
        'edit' => [
            'not_set' => 'The edit theme is not set.',
            'not_found' => 'The edit theme is not found.',
            'not_match' => "The object you're trying to access doesn't belong to the theme being edited. Please reload the page."
        ],
        'settings_menu' => 'Front-end theme',
        'settings_menu_description' => 'Preview the list of installed themes and select an active theme.',
        'default_tab' => 'Properties',
        'name_label' => 'Name',
        'name_create_placeholder' => 'New theme name',
        'author_label' => 'Author',
        'author_placeholder' => 'Person or company name',
        'description_label' => 'Description',
        'description_placeholder' => 'Theme description',
        'homepage_label' => 'Homepage',
        'homepage_placeholder' => 'Website URL',
        'code_label' => 'Code',
        'code_placeholder' => 'A unique code for this theme used for distribution',
        'preview_image_label' => 'Preview image',
        'preview_image_placeholder' => 'The path of theme preview image.',
        'dir_name_label' => 'Directory name',
        'dir_name_create_label' => 'The destination theme directory',
        'theme_label' => 'Theme',
        'theme_title' => 'Themes',
        'activate_button' => 'Activate',
        'active_button' => 'Activate',
        'customize_theme' => 'Customize Theme',
        'customize_button' => 'Customize',
        'duplicate_button' => 'Duplicate',
        'duplicate_title' => 'Duplicate theme',
        'duplicate_theme_success' => 'Theme duplicated!',
        'manage_button' => 'Manage',
        'manage_title' => 'Manage theme',
        'edit_properties_title' => 'Theme',
        'edit_properties_button' => 'Edit properties',
        'save_properties' => 'Save properties',
        'import_button' => 'Import',
        'import_title' => 'Import theme',
        'import_theme_success' => 'Theme imported!',
        'import_uploaded_file' => 'Theme archive file',
        'import_overwrite_label' => 'Overwrite existing files',
        'import_overwrite_comment' => 'Untick this box to only import new files',
        'import_folders_label' => 'Folders',
        'import_folders_comment' => 'Please select the theme folders you would like to import',
        'export_button' => 'Export',
        'export_title' => 'Export theme',
        'export_folders_label' => 'Folders',
        'export_folders_comment' => 'Please select the theme folders you would like to export',
        'delete_button' => 'Delete',
        'delete_confirm' => 'Are you sure you want to delete this theme? It cannot be undone!',
        'delete_active_theme_failed' => 'Cannot delete the active theme, try making another theme active first.',
        'delete_theme_success' => 'Theme deleted!',
        'create_title' => 'Create theme',
        'create_button' => 'Create',
        'create_new_blank_theme' => 'Create a new blank theme',
        'create_theme_success' => 'Theme created!',
        'create_theme_required_name' => 'Please specify a name for the theme.',
        'new_directory_name_label' => 'Theme directory',
        'new_directory_name_comment' => 'Provide a new directory name for the duplicated theme.',
        'dir_name_invalid' => 'Name can contain only digits, Latin letters and the following symbols: _-',
        'dir_name_taken' => 'Desired theme directory already exists.',
        'find_more_themes' => 'Find more themes',
        'saving' => 'Saving theme...',
        'return' => 'Return to themes list'
    ],
    'maintenance' => [
        'settings_menu' => 'Maintenance mode',
        'settings_menu_description' => 'Configure the maintenance mode page and toggle the setting.',
        'is_enabled' => 'Enable maintenance mode',
        'is_enabled_comment' => 'Select the page to show when maintenance mode is activated.',
        'hint' => 'Maintenance mode will display the maintenance page to visitors who are not signed in to the back-end area.'
    ],
    'page' => [
        'not_found_name' => "The page ':name' is not found",
        'not_found' => [
            'label' => 'Page not found',
            'help' => 'The requested page cannot be found.'
        ],
        'custom_error' => [
            'label' => 'Page error',
            'help' => "We're sorry, but something went wrong and the page cannot be displayed."
        ],
        'menu_label' => 'Pages',
        'unsaved_label' => 'Unsaved page(s)',
        'no_list_records' => 'No pages found',
        'new' => 'New page',
        'invalid_url' => 'Invalid URL format. The URL should start with the forward slash symbol and can contain digits, Latin letters and the following symbols: ._-[]:?|/+*^$',
        'delete_confirm_multiple' => 'Delete selected pages?',
        'delete_confirm_single' => 'Delete this page?',
        'no_layout' => '-- no layout --',
        'cms_page' => 'CMS page',
        'title' => 'Page title',
        'url' => 'Page URL',
        'file_name' => 'Page file name'
    ],
    'layout' => [
        'not_found_name' => "The layout ':name' is not found",
        'menu_label' => 'Layouts',
        'unsaved_label' => 'Unsaved layout(s)',
        'no_list_records' => 'No layouts found',
        'new' => 'New layout',
        'delete_confirm_multiple' => 'Delete selected layouts?',
        'delete_confirm_single' => 'Delete this layout?'
    ],
    'partial' => [
        'not_found_name' => "The partial ':name' is not found.",
        'invalid_name' => 'Invalid partial name: :name.',
        'menu_label' => 'Partials',
        'unsaved_label' => 'Unsaved partial(s)',
        'no_list_records' => 'No partials found',
        'delete_confirm_multiple' => 'Delete selected partials?',
        'delete_confirm_single' => 'Delete this partial?',
        'new' => 'New partial'
    ],
    'content' => [
        'not_found_name' => "The content file ':name' is not found.",
        'menu_label' => 'Content',
        'unsaved_label' => 'Unsaved content',
        'no_list_records' => 'No content files found',
        'delete_confirm_multiple' => 'Delete selected content files or directories?',
        'delete_confirm_single' => 'Delete this content file?',
        'new' => 'New content file'
    ],
    'ajax_handler' => [
        'invalid_name' => 'Invalid AJAX handler name: :name.',
        'not_found' => "AJAX handler ':name' was not found."
    ],
    'cms' => [
        'menu_label' => 'CMS'
    ],
    'sidebar' => [
        'add' => 'Add',
        'search' => 'Search...'
    ],
    'editor' => [
        'settings' => 'Settings',
        'title' => 'Title',
        'new_title' => 'New page title',
        'url' => 'URL',
        'filename' => 'File Name',
        'layout' => 'Layout',
        'description' => 'Description',
        'preview' => 'Preview',
        'meta' => 'Meta',
        'meta_title' => 'Meta Title',
        'meta_description' => 'Meta Description',
        'markup' => 'Markup',
        'code' => 'Code',
        'content' => 'Content',
        'hidden' => 'Hidden',
        'hidden_comment' => 'Hidden pages are accessible only by logged-in back-end users.',
        'enter_fullscreen' => 'Enter fullscreen mode',
        'exit_fullscreen' => 'Exit fullscreen mode',
        'open_searchbox' => 'Open Search box',
        'close_searchbox'  => 'Close Search box',
        'open_replacebox' => 'Open Replace box',
        'close_replacebox'  => 'Close Replace box'
    ],
    'asset' => [
        'menu_label' => 'Assets',
        'unsaved_label' => 'Unsaved asset(s)',
        'drop_down_add_title' => 'Add...',
        'drop_down_operation_title' => 'Action...',
        'upload_files' => 'Upload file(s)',
        'create_file' => 'Create file',
        'create_directory' => 'Create directory',
        'directory_popup_title' => 'New directory',
        'directory_name' => 'Directory name',
        'rename' => 'Rename',
        'delete' => 'Delete',
        'move' => 'Move',
        'select' => 'Select',
        'new' => 'New file',
        'rename_popup_title' => 'Rename',
        'rename_new_name' => 'New name',
        'invalid_path' => 'Path can contain only digits, Latin letters, spaces and the following symbols: ._-/',
        'error_deleting_file' => 'Error deleting file :name.',
        'error_deleting_dir_not_empty' => 'Error deleting directory :name. The directory is not empty.',
        'error_deleting_dir' => 'Error deleting directory :name.',
        'invalid_name' => 'Name can contain only digits, Latin letters, spaces and the following symbols: ._-',
        'original_not_found' => 'Original file or directory not found',
        'already_exists' => 'File or directory with this name already exists',
        'error_renaming' => 'Error renaming the file or directory',
        'name_cant_be_empty' => 'The name cannot be empty',
        'too_large' => 'The uploaded file is too large. The maximum allowed file size is :max_size',
        'type_not_allowed' => 'Only the following file types are allowed: :allowed_types',
        'file_not_valid' => 'File is not valid',
        'error_uploading_file' => "Error uploading file ':name': :error",
        'move_please_select' => 'please select',
        'move_destination' => 'Destination directory',
        'move_popup_title' => 'Move assets',
        'move_button' => 'Move',
        'selected_files_not_found' => 'Selected files not found',
        'select_destination_dir' => 'Please select a destination directory',
        'destination_not_found' => 'Destination directory is not found',
        'error_moving_file' => 'Error moving file :file',
        'error_moving_directory' => 'Error moving directory :dir',
        'error_deleting_directory' => 'Error deleting the original directory :dir',
        'no_list_records' => 'No files found',
        'delete_confirm' => 'Delete selected files or directories?',
        'path' => 'Path'
    ],
    'component' => [
        'menu_label' => 'Components',
        'unnamed' => 'Unnamed',
        'no_description' => 'No description provided',
        'alias' => 'Alias',
        'alias_description' => 'A unique name given to this component when using it in the page or layout code.',
        'validation_message' => 'Component aliases are required and can contain only Latin symbols, digits, and underscores. The aliases should start with a Latin symbol.',
        'invalid_request' => 'The template cannot be saved because of invalid component data.',
        'no_records' => 'No components found',
        'not_found' => "The component ':name' is not found.",
        'method_not_found' => "The component ':name' does not contain a method ':method'."
    ],
    'template' => [
        'invalid_type' => 'Unknown template type.',
        'not_found' => 'Template not found.',
        'saved' => 'Template saved.',
        'no_list_records' => 'No records found',
        'delete_confirm' => 'Delete selected templates?',
        'order_by' => 'Order by'
    ],
    'permissions' => [
        'name' => 'CMS',
        'manage_content' => 'Manage website content files',
        'manage_assets' => 'Manage website assets - images, JavaScript files, CSS files',
        'manage_pages' => 'Create, modify and delete website pages',
        'manage_layouts' => 'Create, modify and delete CMS layouts',
        'manage_partials' => 'Create, modify and delete CMS partials',
        'manage_themes' => 'Activate, deactivate and configure CMS themes',
        'manage_media' => 'Upload and manage media contents - images, videos, sounds, documents'
    ],
    'mediafinder' => [
        'label' => 'Media Finder',
        'default_prompt' => 'Click the %s button to find a media item'
    ],
    'media' => [
        'invalid_path' => "Invalid file path specified: ':path'.",
        'menu_label' => 'Media',
        'upload' => 'Upload',
        'move' => 'Move',
        'delete' => 'Delete',
        'add_folder' => 'Add folder',
        'search' => 'Search',
        'display' => 'Display',
        'filter_everything' => 'Everything',
        'filter_images' => 'Images',
        'filter_video' => 'Video',
        'filter_audio' => 'Audio',
        'filter_documents' => 'Documents',
        'library' => 'Library',
        'folder_size_items' => 'item(s)',
        'size' => 'Size',
        'title' => 'Title',
        'last_modified' => 'Last modified',
        'public_url' => 'Public URL',
        'click_here' => 'Click here',
        'thumbnail_error' => 'Error generating thumbnail.',
        'return_to_parent' => 'Return to the parent folder',
        'return_to_parent_label' => 'Go up ..',
        'nothing_selected' => 'Nothing is selected.',
        'multiple_selected' => 'Multiple items selected.',
        'uploading_file_num' => 'Uploading :number file(s)...',
        'uploading_complete' => 'Upload complete',
        'uploading_error' => 'Upload failed',
        'type_blocked' => 'The file type used is blocked for security reasons.',
        'order_by' => 'Order by',
        'folder' => 'Folder',
        'no_files_found' => 'No files found by your request.',
        'delete_empty' => 'Please select items to delete.',
        'delete_confirm' => 'Delete the selected item(s)?',
        'error_renaming_file' => 'Error renaming the item.',
        'new_folder_title' => 'New folder',
        'folder_name' => 'Folder name',
        'error_creating_folder' => 'Error creating folder',
        'folder_or_file_exist' => 'A folder or file with the specified name already exists.',
        'move_empty' => 'Please select items to move.',
        'move_popup_title' => 'Move files or folders',
        'move_destination' => 'Destination folder',
        'please_select_move_dest' => 'Please select a destination folder.',
        'move_dest_src_match' => 'Please select another destination folder.',
        'empty_library' => 'The Media Library is empty. Upload files or create folders to get started.',
        'insert' => 'Insert',
        'crop_and_insert' => 'Crop & Insert',
        'select_single_image' => 'Please select a single image.',
        'selection_not_image' => 'The selected item is not an image.',
        'restore' => 'Undo all changes',
        'resize' => 'Resize...',
        'selection_mode_normal' => 'Normal',
        'selection_mode_fixed_ratio' => 'Fixed ratio',
        'selection_mode_fixed_size' => 'Fixed size',
        'height' => 'Height',
        'width' => 'Width',
        'selection_mode' => 'Selection mode',
        'resize_image' => 'Resize image',
        'image_size' => 'Image size:',
        'selected_size' => 'Selected:'
    ]
];
