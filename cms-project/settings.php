<?php include 'include/nav_user.php' ?>
<div class="container mt-5">
    <h1 class="mb-4">User Settings</h1>

    <form>
        <!-- Profile Information -->
        <div class="card mb-4">
            <div class="card-header">
                <h5>Profile Information</h5>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter your username">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="displayName">Display Name</label>
                    <input type="text" class="form-control" id="displayName" placeholder="Enter your display name">
                </div>
            </div>
        </div>

        <!-- Password Management -->
        <div class="card mb-4">
            <div class="card-header">
                <h5>Password Management</h5>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="currentPassword">Current Password</label>
                    <input type="password" class="form-control" id="currentPassword" placeholder="Enter your current password">
                </div>
                <div class="form-group">
                    <label for="newPassword">New Password</label>
                    <input type="password" class="form-control" id="newPassword" placeholder="Enter a new password">
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirm New Password</label>
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your new password">
                </div>
            </div>
        </div>

        <!-- Notification Preferences -->
        <div class="card mb-4">
            <div class="card-header">
                <h5>Notification Preferences</h5>
            </div>
            <div class="card-body">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="emailNotifications">
                    <label class="form-check-label" for="emailNotifications">Receive email notifications</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="smsNotifications">
                    <label class="form-check-label" for="smsNotifications">Receive SMS notifications</label>
                </div>
            </div>
        </div>

        <!-- Account Settings -->
        <div class="card mb-4">
            <div class="card-header">
                <h5>Account Settings</h5>
            </div>
            <div class="card-body">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="twoFactorAuth">
                    <label class="form-check-label" for="twoFactorAuth">Enable Two-Factor Authentication</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="accountPrivacy">
                    <label class="form-check-label" for="accountPrivacy">Make my account private</label>
                </div>
            </div>
        </div>

        <!-- Save Changes Button -->
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>
<?php include 'include/foot.php'; ?>
