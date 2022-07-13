<?php


namespace Composer\Autoload;

class ComposerStaticInit621c9c90031d23133d364b119f138ba8
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AcyMailing\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AcyMailing\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'AcyMailing\\Classes\\ActionClass' => __DIR__ . '/../..' . '/back/classes/action.php',
        'AcyMailing\\Classes\\AutomationClass' => __DIR__ . '/../..' . '/back/classes/automation.php',
        'AcyMailing\\Classes\\CampaignClass' => __DIR__ . '/../..' . '/back/classes/campaign.php',
        'AcyMailing\\Classes\\ConditionClass' => __DIR__ . '/../..' . '/back/classes/condition.php',
        'AcyMailing\\Classes\\ConfigurationClass' => __DIR__ . '/../..' . '/back/classes/configuration.php',
        'AcyMailing\\Classes\\FieldClass' => __DIR__ . '/../..' . '/back/classes/field.php',
        'AcyMailing\\Classes\\FollowupClass' => __DIR__ . '/../..' . '/back/classes/followup.php',
        'AcyMailing\\Classes\\FormClass' => __DIR__ . '/../..' . '/back/classes/form.php',
        'AcyMailing\\Classes\\HistoryClass' => __DIR__ . '/../..' . '/back/classes/history.php',
        'AcyMailing\\Classes\\ListClass' => __DIR__ . '/../..' . '/back/classes/list.php',
        'AcyMailing\\Classes\\MailClass' => __DIR__ . '/../..' . '/back/classes/mail.php',
        'AcyMailing\\Classes\\MailStatClass' => __DIR__ . '/../..' . '/back/classes/mailstat.php',
        'AcyMailing\\Classes\\MailpoetClass' => __DIR__ . '/../..' . '/back/classes/mailpoet.php',
        'AcyMailing\\Classes\\OverrideClass' => __DIR__ . '/../..' . '/back/classes/override.php',
        'AcyMailing\\Classes\\PluginClass' => __DIR__ . '/../..' . '/back/classes/plugin.php',
        'AcyMailing\\Classes\\QueueClass' => __DIR__ . '/../..' . '/back/classes/queue.php',
        'AcyMailing\\Classes\\RuleClass' => __DIR__ . '/../..' . '/back/classes/rule.php',
        'AcyMailing\\Classes\\SegmentClass' => __DIR__ . '/../..' . '/back/classes/segment.php',
        'AcyMailing\\Classes\\StepClass' => __DIR__ . '/../..' . '/back/classes/step.php',
        'AcyMailing\\Classes\\TagClass' => __DIR__ . '/../..' . '/back/classes/tag.php',
        'AcyMailing\\Classes\\UrlClass' => __DIR__ . '/../..' . '/back/classes/url.php',
        'AcyMailing\\Classes\\UrlClickClass' => __DIR__ . '/../..' . '/back/classes/urlclick.php',
        'AcyMailing\\Classes\\UserClass' => __DIR__ . '/../..' . '/back/classes/user.php',
        'AcyMailing\\Classes\\UserStatClass' => __DIR__ . '/../..' . '/back/classes/userstat.php',
        'AcyMailing\\Classes\\ZoneClass' => __DIR__ . '/../..' . '/back/classes/zone.php',
        'AcyMailing\\Controllers\\AutomationController' => __DIR__ . '/../..' . '/back/controllers/automation.php',
        'AcyMailing\\Controllers\\BouncesController' => __DIR__ . '/../..' . '/back/controllers/bounces.php',
        'AcyMailing\\Controllers\\CampaignsController' => __DIR__ . '/../..' . '/back/controllers/campaigns.php',
        'AcyMailing\\Controllers\\ConfigurationController' => __DIR__ . '/../..' . '/back/controllers/configuration.php',
        'AcyMailing\\Controllers\\DashboardController' => __DIR__ . '/../..' . '/back/controllers/dashboard.php',
        'AcyMailing\\Controllers\\DeactivateController' => __DIR__ . '/../..' . '/back/controllers/deactivate.php',
        'AcyMailing\\Controllers\\DynamicsController' => __DIR__ . '/../..' . '/back/controllers/dynamics.php',
        'AcyMailing\\Controllers\\EntitySelectController' => __DIR__ . '/../..' . '/back/controllers/entitySelect.php',
        'AcyMailing\\Controllers\\FieldsController' => __DIR__ . '/../..' . '/back/controllers/fields.php',
        'AcyMailing\\Controllers\\FileController' => __DIR__ . '/../..' . '/back/controllers/file.php',
        'AcyMailing\\Controllers\\FollowupsController' => __DIR__ . '/../..' . '/back/controllers/followups.php',
        'AcyMailing\\Controllers\\FormsController' => __DIR__ . '/../..' . '/back/controllers/forms.php',
        'AcyMailing\\Controllers\\GoproController' => __DIR__ . '/../..' . '/back/controllers/gopro.php',
        'AcyMailing\\Controllers\\LanguageController' => __DIR__ . '/../..' . '/back/controllers/language.php',
        'AcyMailing\\Controllers\\ListsController' => __DIR__ . '/../..' . '/back/controllers/lists.php',
        'AcyMailing\\Controllers\\MailsController' => __DIR__ . '/../..' . '/back/controllers/mails.php',
        'AcyMailing\\Controllers\\OverrideController' => __DIR__ . '/../..' . '/back/controllers/override.php',
        'AcyMailing\\Controllers\\PluginsController' => __DIR__ . '/../..' . '/back/controllers/plugins.php',
        'AcyMailing\\Controllers\\QueueController' => __DIR__ . '/../..' . '/back/controllers/queue.php',
        'AcyMailing\\Controllers\\SegmentsController' => __DIR__ . '/../..' . '/back/controllers/segments.php',
        'AcyMailing\\Controllers\\StatsController' => __DIR__ . '/../..' . '/back/controllers/stats.php',
        'AcyMailing\\Controllers\\ToggleController' => __DIR__ . '/../..' . '/back/controllers/toggle.php',
        'AcyMailing\\Controllers\\UpdateController' => __DIR__ . '/../..' . '/back/controllers/update.php',
        'AcyMailing\\Controllers\\UsersController' => __DIR__ . '/../..' . '/back/controllers/users.php',
        'AcyMailing\\Controllers\\ZonesController' => __DIR__ . '/../..' . '/back/controllers/zones.php',
        'AcyMailing\\FrontControllers\\ArchiveController' => __DIR__ . '/../..' . '/front/controllers/archive.php',
        'AcyMailing\\FrontControllers\\CronController' => __DIR__ . '/../..' . '/front/controllers/cron.php',
        'AcyMailing\\FrontControllers\\FrontcampaignsController' => __DIR__ . '/../..' . '/front/controllers/frontcampaigns.php',
        'AcyMailing\\FrontControllers\\FrontdynamicsController' => __DIR__ . '/../..' . '/front/controllers/frontdynamics.php',
        'AcyMailing\\FrontControllers\\FrontentityselectController' => __DIR__ . '/../..' . '/front/controllers/frontentityselect.php',
        'AcyMailing\\FrontControllers\\FrontfileController' => __DIR__ . '/../..' . '/front/controllers/frontfile.php',
        'AcyMailing\\FrontControllers\\FrontlistsController' => __DIR__ . '/../..' . '/front/controllers/frontlists.php',
        'AcyMailing\\FrontControllers\\FrontmailsController' => __DIR__ . '/../..' . '/front/controllers/frontmails.php',
        'AcyMailing\\FrontControllers\\FrontservicesController' => __DIR__ . '/../..' . '/front/controllers/frontservices.php',
        'AcyMailing\\FrontControllers\\FrontstatsController' => __DIR__ . '/../..' . '/front/controllers/frontstats.php',
        'AcyMailing\\FrontControllers\\FronttoggleController' => __DIR__ . '/../..' . '/front/controllers/fronttoggle.php',
        'AcyMailing\\FrontControllers\\FronturlController' => __DIR__ . '/../..' . '/front/controllers/fronturl.php',
        'AcyMailing\\FrontControllers\\FrontusersController' => __DIR__ . '/../..' . '/front/controllers/frontusers.php',
        'AcyMailing\\FrontControllers\\FrontzonesController' => __DIR__ . '/../..' . '/front/controllers/frontzones.php',
        'AcyMailing\\FrontViews\\ArchiveViewArchive' => __DIR__ . '/../..' . '/front/views/archive/view.html.php',
        'AcyMailing\\FrontViews\\FrontcampaignsViewFrontcampaigns' => __DIR__ . '/../..' . '/front/views/frontcampaigns/view.html.php',
        'AcyMailing\\FrontViews\\FrontdynamicsViewFrontdynamics' => __DIR__ . '/../..' . '/front/views/frontdynamics/view.html.php',
        'AcyMailing\\FrontViews\\FrontfileViewFrontfile' => __DIR__ . '/../..' . '/front/views/frontfile/view.html.php',
        'AcyMailing\\FrontViews\\FrontlistsViewFrontlists' => __DIR__ . '/../..' . '/front/views/frontlists/view.html.php',
        'AcyMailing\\FrontViews\\FrontmailsViewFrontmails' => __DIR__ . '/../..' . '/front/views/frontmails/view.html.php',
        'AcyMailing\\FrontViews\\FrontusersViewFrontusers' => __DIR__ . '/../..' . '/front/views/frontusers/view.html.php',
        'AcyMailing\\Helpers\\AutomationHelper' => __DIR__ . '/../..' . '/back/helpers/automation.php',
        'AcyMailing\\Helpers\\BounceHelper' => __DIR__ . '/../..' . '/back/helpers/bounce.php',
        'AcyMailing\\Helpers\\CaptchaHelper' => __DIR__ . '/../..' . '/back/helpers/captcha.php',
        'AcyMailing\\Helpers\\CronHelper' => __DIR__ . '/../..' . '/back/helpers/cron.php',
        'AcyMailing\\Helpers\\EditorHelper' => __DIR__ . '/../..' . '/back/helpers/editor.php',
        'AcyMailing\\Helpers\\EncodingHelper' => __DIR__ . '/../..' . '/back/helpers/encoding.php',
        'AcyMailing\\Helpers\\EntitySelectHelper' => __DIR__ . '/../..' . '/back/helpers/entitySelect.php',
        'AcyMailing\\Helpers\\ExportHelper' => __DIR__ . '/../..' . '/back/helpers/export.php',
        'AcyMailing\\Helpers\\FormPositionHelper' => __DIR__ . '/../..' . '/back/helpers/formposition.php',
        'AcyMailing\\Helpers\\HeaderHelper' => __DIR__ . '/../..' . '/back/helpers/header.php',
        'AcyMailing\\Helpers\\ImageHelper' => __DIR__ . '/../..' . '/back/helpers/image.php',
        'AcyMailing\\Helpers\\ImportHelper' => __DIR__ . '/../..' . '/back/helpers/import.php',
        'AcyMailing\\Helpers\\MailerHelper' => __DIR__ . '/../..' . '/back/helpers/mailer.php',
        'AcyMailing\\Helpers\\MigrationHelper' => __DIR__ . '/../..' . '/back/helpers/migration.php',
        'AcyMailing\\Helpers\\PaginationHelper' => __DIR__ . '/../..' . '/back/helpers/pagination.php',
        'AcyMailing\\Helpers\\PluginHelper' => __DIR__ . '/../..' . '/back/helpers/plugin.php',
        'AcyMailing\\Helpers\\QueueHelper' => __DIR__ . '/../..' . '/back/helpers/queue.php',
        'AcyMailing\\Helpers\\RegacyHelper' => __DIR__ . '/../..' . '/back/helpers/regacy.php',
        'AcyMailing\\Helpers\\SplashscreenHelper' => __DIR__ . '/../..' . '/back/helpers/splashscreen.php',
        'AcyMailing\\Helpers\\TabHelper' => __DIR__ . '/../..' . '/back/helpers/tab.php',
        'AcyMailing\\Helpers\\ToolbarHelper' => __DIR__ . '/../..' . '/back/helpers/toolbar.php',
        'AcyMailing\\Helpers\\UpdateHelper' => __DIR__ . '/../..' . '/back/helpers/update.php',
        'AcyMailing\\Helpers\\UserHelper' => __DIR__ . '/../..' . '/back/helpers/user.php',
        'AcyMailing\\Helpers\\WorkflowHelper' => __DIR__ . '/../..' . '/back/helpers/workflow.php',
        'AcyMailing\\Init\\ElementorForm' => __DIR__ . '/../..' . '/wpinit/elementorForm.php',
        'AcyMailing\\Init\\acyActivation' => __DIR__ . '/../..' . '/wpinit/activation.php',
        'AcyMailing\\Init\\acyAddons' => __DIR__ . '/../..' . '/wpinit/addons.php',
        'AcyMailing\\Init\\acyBeaver' => __DIR__ . '/../..' . '/wpinit/beaver.php',
        'AcyMailing\\Init\\acyCron' => __DIR__ . '/../..' . '/wpinit/cron.php',
        'AcyMailing\\Init\\acyDeactivate' => __DIR__ . '/../..' . '/wpinit/deactivate.php',
        'AcyMailing\\Init\\acyElementor' => __DIR__ . '/../..' . '/wpinit/elementor.php',
        'AcyMailing\\Init\\acyFakePhpMailer' => __DIR__ . '/../..' . '/wpinit/fake_phpmailer.php',
        'AcyMailing\\Init\\acyForms' => __DIR__ . '/../..' . '/wpinit/forms.php',
        'AcyMailing\\Init\\acyGutenberg' => __DIR__ . '/../..' . '/wpinit/gutenberg.php',
        'AcyMailing\\Init\\acyMenu' => __DIR__ . '/../..' . '/wpinit/menu.php',
        'AcyMailing\\Init\\acyMessage' => __DIR__ . '/../..' . '/wpinit/message.php',
        'AcyMailing\\Init\\acyOauth' => __DIR__ . '/../..' . '/wpinit/Oauth.php',
        'AcyMailing\\Init\\acyOverrideEmail' => __DIR__ . '/../..' . '/wpinit/override_email.php',
        'AcyMailing\\Init\\acyRouter' => __DIR__ . '/../..' . '/wpinit/router.php',
        'AcyMailing\\Init\\acySecurity' => __DIR__ . '/../..' . '/wpinit/security.php',
        'AcyMailing\\Init\\acyUpdate' => __DIR__ . '/../..' . '/wpinit/update.php',
        'AcyMailing\\Init\\acyUsersynch' => __DIR__ . '/../..' . '/wpinit/usersynch.php',
        'AcyMailing\\Init\\acyWpRocket' => __DIR__ . '/../..' . '/wpinit/wprocket.php',
        'AcyMailing\\Libraries\\acymClass' => __DIR__ . '/../..' . '/back/libraries/class.php',
        'AcyMailing\\Libraries\\acymController' => __DIR__ . '/../..' . '/back/libraries/controller.php',
        'AcyMailing\\Libraries\\acymObject' => __DIR__ . '/../..' . '/back/libraries/object.php',
        'AcyMailing\\Libraries\\acymParameter' => __DIR__ . '/../..' . '/back/libraries/parameter.php',
        'AcyMailing\\Libraries\\acymPlugin' => __DIR__ . '/../..' . '/back/libraries/plugin.php',
        'AcyMailing\\Libraries\\acymView' => __DIR__ . '/../..' . '/back/libraries/view.php',
        'AcyMailing\\Libraries\\acympunycode' => __DIR__ . '/../..' . '/back/libraries/punycode.php',
        'AcyMailing\\Types\\AclType' => __DIR__ . '/../..' . '/back/types/acl.php',
        'AcyMailing\\Types\\CharsetType' => __DIR__ . '/../..' . '/back/types/charset.php',
        'AcyMailing\\Types\\DelayType' => __DIR__ . '/../..' . '/back/types/delay.php',
        'AcyMailing\\Types\\FailactionType' => __DIR__ . '/../..' . '/back/types/failaction.php',
        'AcyMailing\\Types\\FileTreeType' => __DIR__ . '/../..' . '/back/types/fileTree.php',
        'AcyMailing\\Types\\OperatorType' => __DIR__ . '/../..' . '/back/types/operator.php',
        'AcyMailing\\Types\\OperatorinType' => __DIR__ . '/../..' . '/back/types/operatorin.php',
        'AcyMailing\\Types\\UploadfileType' => __DIR__ . '/../..' . '/back/types/uploadFile.php',
        'AcyMailing\\Views\\AutomationViewAutomation' => __DIR__ . '/../..' . '/back/views/automation/view.html.php',
        'AcyMailing\\Views\\BouncesViewBounces' => __DIR__ . '/../..' . '/back/views/bounces/view.html.php',
        'AcyMailing\\Views\\CampaignsViewCampaigns' => __DIR__ . '/../..' . '/back/views/campaigns/view.html.php',
        'AcyMailing\\Views\\ConfigurationViewConfiguration' => __DIR__ . '/../..' . '/back/views/configuration/view.html.php',
        'AcyMailing\\Views\\DashboardViewDashboard' => __DIR__ . '/../..' . '/back/views/dashboard/view.html.php',
        'AcyMailing\\Views\\DynamicsViewDynamics' => __DIR__ . '/../..' . '/back/views/dynamics/view.html.php',
        'AcyMailing\\Views\\FieldsViewFields' => __DIR__ . '/../..' . '/back/views/fields/view.html.php',
        'AcyMailing\\Views\\FileViewFile' => __DIR__ . '/../..' . '/back/views/file/view.html.php',
        'AcyMailing\\Views\\FormsViewForms' => __DIR__ . '/../..' . '/back/views/forms/view.html.php',
        'AcyMailing\\Views\\GoproViewGopro' => __DIR__ . '/../..' . '/back/views/gopro/view.html.php',
        'AcyMailing\\Views\\LanguageViewLanguage' => __DIR__ . '/../..' . '/back/views/language/view.html.php',
        'AcyMailing\\Views\\ListsViewLists' => __DIR__ . '/../..' . '/back/views/lists/view.html.php',
        'AcyMailing\\Views\\MailsViewMails' => __DIR__ . '/../..' . '/back/views/mails/view.html.php',
        'AcyMailing\\Views\\OverrideViewOverride' => __DIR__ . '/../..' . '/back/views/override/view.html.php',
        'AcyMailing\\Views\\PluginsViewPlugins' => __DIR__ . '/../..' . '/back/views/plugins/view.html.php',
        'AcyMailing\\Views\\QueueViewQueue' => __DIR__ . '/../..' . '/back/views/queue/view.html.php',
        'AcyMailing\\Views\\SegmentsViewSegments' => __DIR__ . '/../..' . '/back/views/segments/view.html.php',
        'AcyMailing\\Views\\StatsViewStats' => __DIR__ . '/../..' . '/back/views/stats/view.html.php',
        'AcyMailing\\Views\\UsersViewUsers' => __DIR__ . '/../..' . '/back/views/users/view.html.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit621c9c90031d23133d364b119f138ba8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit621c9c90031d23133d364b119f138ba8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit621c9c90031d23133d364b119f138ba8::$classMap;

        }, null, ClassLoader::class);
    }
}