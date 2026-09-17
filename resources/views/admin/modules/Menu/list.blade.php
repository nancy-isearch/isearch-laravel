@extends('admin.layouts.app')

@section('content')
    <section class="section">
        <div class="container-fluid">

            <!-- Title -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">

                    <div class="col-md-6">
                        <div class="title">
                            <h2>Menus</h2>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="breadcrumb-wrapper">
                            <button type="button" class="btn btn-primary" onclick="openMenuModal()">
                                + Add New Menu
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Table -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <div class="table-wrapper table-responsive">
                            <table class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th><h6>#</h6></th>
                                        <th><h6>Name</h6></th>
                                        <th><h6>Location</h6></th>
                                        <th><h6>Total Items</h6></th>
                                        <th><h6>Actions</h6></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($menus as $index => $menu)
                                        <tr>
                                            <td>{{ $menus->firstItem() + $index }}</td>
                                            <td><p>{{ $menu->name }}</p></td>
                                            <td>{{ $menu->location ?? 'None' }}</td>
                                            <td>{{ $menu->items_count }}</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-info text-white me-2" onclick="editMenu({{ $menu->id }})">Edit</button>
                                                <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" class="d-inline menu-delete-form" onsubmit="deleteMenu(event, this)">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">No menus found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            
                            <div class="mt-3">
                                {{ $menus->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Mega Menu Modal -->
    <div class="modal fade" id="menuModal" tabindex="-1" aria-labelledby="menuModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="menuForm" method="POST">
                    @csrf
                    <input type="hidden" name="_method" id="menuMethod" value="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="menuModalLabel">Add Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Menu Name</label>
                                <input type="text" class="form-control" name="name" id="menuName" required placeholder="e.g. SEO Services">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Location (Optional)</label>
                                <input type="text" class="form-control" name="location" id="menuLocation" placeholder="e.g. header">
                            </div>
                        </div>

                        <hr>
                        
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="mb-0">Menu Items</h6>
                            <button type="button" class="btn btn-sm btn-success" onclick="addMenuItem()">+ Add Item</button>
                        </div>

                        <div id="menuItemsContainer">
                            <!-- Items will be appended here -->
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="saveMenuBtn">Save Menu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Hidden Template for Menu Items -->
    <template id="menuItemTemplate">
        <div class="menu-item-row p-3 border rounded mb-2 bg-light">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <label class="form-label" style="font-size:12px;">Title</label>
                    <input type="text" class="form-control item-title" required placeholder="e.g. Link Building">
                </div>
                <div class="col-md-3">
                    <label class="form-label" style="font-size:12px;">URL</label>
                    <input type="text" class="form-control item-url" placeholder="e.g. /link-building">
                </div>
                <div class="col-md-4">
                    <label class="form-label" style="font-size:12px;">Link to Page</label>
                    <select class="form-select item-page">
                        <option value="">-- Custom URL --</option>
                        @foreach($pages as $page)
                            <option value="{{ $page->id }}">{{ $page->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-1 text-end mt-4">
                    <button type="button" class="btn btn-sm btn-danger px-2 py-1" onclick="this.closest('.menu-item-row').remove()"><i class="lni lni-trash-can"></i></button>
                </div>
            </div>
        </div>
    </template>
@endsection

@push('scripts')
<script>
    let itemIndex = 0;
    const menuModal = new bootstrap.Modal(document.getElementById('menuModal'));

    function openMenuModal() {
        document.getElementById('menuForm').reset();
        document.getElementById('menuMethod').value = 'POST';
        document.getElementById('menuForm').action = "{{ route('menus.store') }}";
        document.getElementById('menuModalLabel').innerText = "Add New Menu";
        document.getElementById('menuItemsContainer').innerHTML = "";
        itemIndex = 0;
        menuModal.show();
    }

    function addMenuItem(data = null) {
        const template = document.getElementById('menuItemTemplate').content.cloneNode(true);
        const row = template.querySelector('.menu-item-row');
        
        const titleInput = row.querySelector('.item-title');
        titleInput.name = `items[${itemIndex}][title]`;
        
        const urlInput = row.querySelector('.item-url');
        urlInput.name = `items[${itemIndex}][url]`;
        
        const pageSelect = row.querySelector('.item-page');
        pageSelect.name = `items[${itemIndex}][page_id]`;
        
        if (data) {
            titleInput.value = data.title || '';
            urlInput.value = data.url || '';
            if (data.page_id) {
                pageSelect.value = data.page_id;
            }
        }
        
        document.getElementById('menuItemsContainer').appendChild(row);
        itemIndex++;
    }

    function editMenu(id) {
        document.getElementById('menuForm').reset();
        document.getElementById('menuItemsContainer').innerHTML = "";
        itemIndex = 0;

        // Fetch data
        fetch(`/admin/menus/${id}/edit`, {
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json'
            }
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                document.getElementById('menuModalLabel').innerText = "Edit Menu";
                document.getElementById('menuMethod').value = 'PUT';
                document.getElementById('menuForm').action = `/admin/menus/${id}`;
                
                document.getElementById('menuName').value = data.menu.name;
                document.getElementById('menuLocation').value = data.menu.location || '';
                
                if (data.menu.all_items && data.menu.all_items.length > 0) {
                    data.menu.all_items.forEach(item => {
                        addMenuItem(item);
                    });
                }
                menuModal.show();
            }
        });
    }

    document.getElementById('menuForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const btn = document.getElementById('saveMenuBtn');
        btn.disabled = true;
        btn.innerText = "Saving...";

        const formData = new FormData(this);
        
        fetch(this.action, {
            method: 'POST', // always POST for fetch, method spoofing handles PUT
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                location.reload(); // simple reload for now
            } else {
                alert("Error saving menu.");
                btn.disabled = false;
                btn.innerText = "Save Menu";
            }
        }).catch(err => {
            alert("Server Error");
            btn.disabled = false;
            btn.innerText = "Save Menu";
        });
    });

    function deleteMenu(e, form) {
        e.preventDefault();
        if(confirm('Are you sure you want to delete this menu?')) {
            fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: new FormData(form)
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    location.reload();
                }
            });
        }
    }
</script>
@endpush
