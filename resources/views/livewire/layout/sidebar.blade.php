<?php

use Livewire\Volt\Component;

new class extends Component
{
    public function logout(): void
    {
        auth()->guard('web')->logout();

        session()->invalidate();
        session()->regenerateToken();

        $this->redirect('/', navigate: true);
    }
}; ?>

<div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li
                class="sidebar-item active ">
                <a href="{{ route('admin.dashboard') }}" wire:navigate class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
                

            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Post</span>
                </a>
                
                <ul class="submenu ">
                    
                    <li class="submenu-item  ">
                        <a href="component-accordion.html" class="submenu-link">Blog</a>
                        
                    </li>
                    
                    <li class="submenu-item  ">
                        <a href="component-alert.html" class="submenu-link">Informasi</a>
                        
                    </li>
                    
                    
                </ul>
                

            </li>
            
            <li
                class="sidebar-item has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-collection-fill"></i>
                    <span>PIP</span>
                </a>

                 <ul class="submenu ">
                    
                    <li class="submenu-item  ">
                        {{-- <a href="{{ route('admin.form-generator') }}" wire:navigate class="submenu-link">Konfigurasi form</a> --}}
                        
                    </li>
                    
                    <li class="submenu-item  ">
                        <a href="#" class="submenu-link">Kandidat beasiswa</a>
                        
                    </li>
                    
                    
                </ul>
            </li>
            
            <li
                class="sidebar-item  ">
                <a href="https://github.com/zuramai/mazer#donation" data-bs-toggle="modal" data-bs-target="#backdrop" class='sidebar-link'>
                    <i class="bi bi-box-arrow-left"></i>
                    <span>Logout</span>
                </a>
            </li>

            <div class="modal fade text-left" id="backdrop" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel4" data-bs-backdrop="false" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel4">Keluar Aplikasi</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                            Apakah Anda yakin ingin keluar dari aplikasi?
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary"
                                                data-bs-dismiss="modal">
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Tutup</span>
                                            </button>
                                            <button type="button" wire:click="logout" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Iya saya yakin</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
        </ul>
    </div>