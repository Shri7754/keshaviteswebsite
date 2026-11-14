<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectBooking extends Model
{
    protected $fillable = [
        'name',
        'mobile',
        'email',
        'service',
        'description',
        'demo_date',
        'demo_time',
        'status',
    ];

    protected $casts = [
        'demo_date' => 'date',
        'demo_time' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the display name for a service
     */
    public static function getServiceDisplayName($service)
    {
        $services = self::getAvailableServices();
        return $services[$service] ?? $service;
    }

    /**
     * Get all available IT services
     */
    public static function getAvailableServices()
    {
        return [
            'website_design' => 'Website Design & Development',
            'seo_marketing' => 'SEO & Digital Marketing',
            'software_dev' => 'Software Development',
            'mobile_app' => 'Mobile Application Development',
            'ai_chatbot' => 'AI Chatbot & Automation',
            'crm_erp' => 'CRM & ERP Development',
            'ecommerce' => 'E-commerce Development',
            'api_integration' => 'API Integration',
            'custom_solutions' => 'Custom IT Solutions',
            'other_services' => 'Other IT Services',
        ];
    }

    /**
     * Get service icon for frontend display
     */
    public static function getServiceIcon($service)
    {
        $icons = [
            'website_design' => 'fa-globe',
            'seo_marketing' => 'fa-chart-line',
            'software_dev' => 'fa-code',
            'mobile_app' => 'fa-mobile-alt',
            'ai_chatbot' => 'fa-robot',
            'crm_erp' => 'fa-cogs',
            'ecommerce' => 'fa-shopping-cart',
            'api_integration' => 'fa-plug',
            'custom_solutions' => 'fa-lightbulb',
            'other_services' => 'fa-ellipsis-h',
        ];

        return $icons[$service] ?? 'fa-star';
    }

    /**
     * Get service color for UI
     */
    public static function getServiceColor($service)
    {
        $colors = [
            'website_design' => '#FF6B6B',
            'seo_marketing' => '#4ECDC4',
            'software_dev' => '#45B7D1',
            'mobile_app' => '#FFA07A',
            'ai_chatbot' => '#98D8C8',
            'crm_erp' => '#F7DC6F',
            'ecommerce' => '#BB8FCE',
            'api_integration' => '#85C1E2',
            'custom_solutions' => '#F8B6D8',
            'other_services' => '#B4A7D6',
        ];

        return $colors[$service] ?? '#6C757D';
    }
}
